<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // gửi mail các nhận đăng ký
    public static function mailRegister($user, $token) {
        Mail::send('auth::mails.register', ['user'=>$user, 'token'=>$token], function($message) use ($user){
            $message->from('support@khtrungbay.com', 'Kích hoạt tài khoản');
            $message->subject('Kích hoạt tài khoản')
                ->to($user->email, $user->lastName);
        });
    }

    // đặt lại mất khẩu
    public static function mailResetPassword($user, $token) {
        Mail::send('auth::mails.resetPassword', ['user'=>$user, 'token'=>$token], function($message) use ($user){
            $message->from('support@khutrungbay.com', 'Thay đổi mật khẩu');
            $message->subject('Thay đổi mật khẩu')
                ->to($user->email, $user->lastName);
        });
    }
}
