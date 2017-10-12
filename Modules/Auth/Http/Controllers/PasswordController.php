<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use Illuminate\Routing\Controller;
use App\Http\Controllers\Controller;


use App\User;
use Modules\Auth\Entities\ResetPassword;

class PasswordController extends Controller
{
    public function getFormPassword() {
        return view('auth::pages.resetPassword');
    }

    public function postSenLinkResetPassword(Request $request) {
        $this->validate($request, $this->getUserResetPasswordRequestRules(), $this->getUserResetPasswordRequestMessages());
        
        $email = $request->email;
        $user = User::where('email', $email)->first();

        if($user && $user->status == 1) {
            // tạo 1 link để reset password
            $password_reset = ResetPassword::where('email', $email);

            // nếu có rồi thì xóa đi
            if($password_reset)
                $password_reset->delete();
            // tạo mới 1 link
            $password_reset = new ResetPassword();
            $token = md5($email) . str_random(20);
            $password_reset->token = $token;
            $password_reset->email = $email;
            $password_reset->save();
            // gửi mail
            MailController::mailResetPassword($user, $token);
        }
        return redirect()->back()->with('status', 'Chúng tôi đã gửi 1 liên kết khôi phục tài khoản, bạn vui lòng truy cập email để đặt lại mật khẩu. ');
    }

    // trả về view nếu link đúng
    public function showResetForm($token) {
        $password_reset = ResetPassword::where('token', $token)->first();
        if($password_reset) {
            return view('auth::pages.newPassword', compact('token'));
        }
        return 'Lỗi hệ thống gửi email!, vui lòng thực hiện lại!';
    }

    // hàm đặt lại mật khẩu mới, 1 token gửi kèm email để thực hiện so sánh
    public function resetPassword($token, Request $request) {
        $this->validate($request, $this->getUserConfirmResetPasswordRequestRules(), $this->getUserConfirmResetPasswordRequestMessage());

        $password_reset = ResetPassword::where('token', $token)->first();
        if($password_reset) {
            // so sánh để tìm user hiện tại
            $email = $password_reset->email;
            $user = User::where('email', $email)->first();

            if($user && $user->status == 1) {
                // thực hiện việc đổi pass
                $user->password = bcrypt($request->password);
                $user->save();
                // xóa token
                $password_reset->delete();
                return redirect('dang-nhap')->with(['status'=>'Mật khẩu của bạn đã được cập nhật !']);
            }
        }
        return 'LỖI HỆ THỐNG!';
    }

    // hàm request
    function getUserResetPasswordRequestRules()
    {
        return [
            'email'     =>  'required|email|max:50'
        ];
    }
    function getUserResetPasswordRequestMessages()
    {
        return [
            'email.required'    =>  'Email không được để trống.',
            'email.email'       =>  'Email không hợp lệ.',
            'email.max'         =>  'Email quá dài.'
        ];
    }
    function getUserConfirmResetPasswordRequestRules()
    {
        return [
            'password'  =>  'required|same:retype|regex:/^[a-z0-9A-Z_-]{6,100}$/',
            'retype'    =>  'required'
        ];
    }
    function getUserConfirmResetPasswordRequestMessage()
    {
        return [
            'password.required'     =>  'Nhập mật khẩu mới',
            'password.regex'        =>  'Mật khẩu không hợp lệ',
            'password.same'         =>  'Mật khẩu nhập lại không chính xác',
            'retype.required'       =>  'Xin hãy nhập lại mật khẩu'
        ];
    }
}
