<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Auth;

use Modules\Auth\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    
    // get login form
    public function getLogin() {
        return view('auth::pages.login');
    }

    public function postLogin(LoginRequest $request) {
        $remember = $request->remember; // nhớ mật khẩu người dùng, true orr false.
        $user = [
            'email'         =>  $request->email,
            'password'      =>  $request->password,
            'status'        =>   1,
        ];

        if( Auth::attempt($user, $remember) ) {

            if (Auth::user()->level == 1) {
                return redirect()->route('admin::home');
            }else {
            // return redirect('dang-nhap')->with('invalid', 'Bạn không có quyền truy cập.');
            return redirect()->route('frontend.home');
            }

        }
        return redirect('dang-nhap')->with('invalid', 'Sai thông tin đăng nhập');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
