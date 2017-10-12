<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use App\User;

//request
use Modules\Auth\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function getRegister () {
        return view('auth::pages.register');
    }

    public function postRegister (RegisterRequest $request) {
        $user = new User;
        $user->firstName = $request->fname;
        $user->lastName = $request->lname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->avatar = 'avatar.png';
        $user->level = 0;
        $user->status = 0;
        $user->save();

        // tạo ra 1 token để xác nhận tài khoản
        $user['token'] = str_random(64);
        // dd($user);

        $findUser =User::find($user['id']);
        $findUser->remember_token = $user['token'];
        $findUser->save();

        if($user) {
            MailController::mailRegister($user, $user['token']);

        return redirect('dang-ky')->with('status', 'Bạn đã đăng ký tài khoản thành công, vui lòng truy cập email để kích hoạt tài khoản.');
        }

        return redirect()->back()->withInput();
        
    }


    // hàm xác nhận tài khoản mail
    public function confirmRegister($token) {
        $userRegister = User::where('remember_token', $token)->first();
        if($userRegister) {
            $userRegister->status = 1;
            $userRegister->remember_token = '';
            $userRegister->save();
            return redirect('dang-nhap')->with('status', 'Tài khoản của bạn đã được kích hoạt, hãy đăng nhập để trải nghiệm dịch vụ của chúng tôi.');
        }
    }
}
