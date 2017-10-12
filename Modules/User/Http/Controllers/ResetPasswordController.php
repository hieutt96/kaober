<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
// request reset password
use Modules\User\Http\Requests\PasswordRequest;
// model
use Modules\User\Entities\User;
use Auth;
use Hash;

class ResetPasswordController extends Controller
{

    public function edit(PasswordRequest $request)
    {
        $user = User::find(Auth::User()->id)->first();
        if(Hash::check($request->oldpassword, Auth::User()->password)) {
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->back()->with('success','Cập nhật mật khẩu thành công!');
        }else {
            return redirect()->back()->with('failed','Mật khẩu không chính xác, Xin thử lại');
        }
        return redirect()->back();
    }

}
