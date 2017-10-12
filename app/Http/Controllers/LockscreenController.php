<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LockscreenController extends Controller
{
    // get login form
    public function index() {
        return view('lockscreen');
    }

    public function postLockScreen(Request $request) {
    	$user = [
            'email'         =>  'buihuycuong1510@gmail.com',
            'password'      =>  $request->password,
            'status'        =>   1,
        ];

        if( Auth::attempt($user) ) {
            if (Auth::user()->level == 1) {
                return redirect()->route('admin::home');
            }
        }
        return redirect()->back()->with('failed', 'Bạn không có quyền truy cập.');
    }
}
