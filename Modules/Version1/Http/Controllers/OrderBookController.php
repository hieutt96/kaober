<?php

namespace Modules\Version1\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

//request
use Modules\Version1\Http\Requests\OrderBookRequest;
// model
use Modules\Version1\Entities\OrderBook;

use Illuminate\Support\Facades\Mail;

class OrderBookController extends Controller
{


    public function create(OrderBookRequest $request)
    {
    	try{
    		
    		$orderbook = new OrderBook;
    		$orderbook->title = $request->title;
    		$orderbook->email = $request->email;
    		$orderbook->phone = $request->phone;
    		$orderbook->username = $request->username;
    		$orderbook->save();

    		// gửi mail kèm
    		Mail::send('version1::mails.orderbook', ['title' => $request->title, 'email' => $request->email, 'phone' => $request->phone], function($message) use ($title, $email, $phone) {
    			$message->from(env('MAIL_ADMIN_CSKH_ORDER'), 'Kaober.com');
    			$message->subject('ĐẶT SÁCH THÀNH CÔNG')
    			    ->to($email, $title);
    		});

    		return redirect()->route('frontend.home')->with('success', 'Đặt hàng thành công, chúng tôi sẽ liên hệ với bạn khi có sản phẩm.');

    	}catch( \Exception $e ) {

    		return redirect()->route('frontend.home')->with('success', 'Đặt hàng lỗi, xin thử lại');

    	}
    }


}
