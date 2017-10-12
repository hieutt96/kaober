<?php

namespace Modules\Version1\Http\Controllers;

use Illuminate\Http\Request;
// use Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Mail;

use DB;

class MailController extends Controller
{

    public function sub(Request $request) {

        $email =  $request->input('email');

        if(!empty($email)) {

            DB::table('subscriptions')->insert(
                ['email' => $email, 'status' => 0]
            );

            Mail::send('version1::mails.sub', ['email'=> $email], function($message) use ($email){
                $message->from('buichuc1510@gmail.com', 'Kaober.com');
                $message->subject('Đăng ký nhận blog')->to($email);
            });
            return redirect()->route('frontend.home')->with('success', 'Cảm ơn bạn đã đăng ký !');
        }else {
            return redirect()->back();
        }

    }

}
