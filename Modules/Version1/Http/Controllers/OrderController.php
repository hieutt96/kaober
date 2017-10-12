<?php

namespace Modules\Version1\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Cart;
use DB;
use Illuminate\Support\Facades\Mail;
use Modules\Version1\Entities\Product;
use Modules\Version1\Entities\OrderProduct;
use Modules\Version1\Entities\Order;
//request
use Modules\Version1\Http\Requests\OrderRequest;

class OrderController extends Controller
{

    public function create(OrderRequest $request)
    {
        DB::beginTransaction();
        try {

            // save order, chưa cài đặt khi nó ko có sản phẩm nào
            $order = new Order;
            $order->keyorder = str_random(4).'-'.str_random(4).'-'.str_random(4).'-'.str_random(4);
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->city = $request->city;
            $order->address = $request->address;
            $order->status = 0;
            $order->save();

            // tạo bản ghi trong bảng many-to-many giữa order và product
            if(Cart::count()) {
                $products = Cart::content();
                foreach( $products as $product ) {
                    $orderProduct = new OrderProduct;
                    $orderProduct->product_id = $product->id;
                    $orderProduct->order_id = $order->order_id;
                    $orderProduct->price = $product->price;
                    $orderProduct-> quantity = $product->qty;
                    $orderProduct->save();
                }
            }

            DB::commit();
            // gửi mail đến quản trị viên và cả khách hàng
            $this->orderMail($request->email, $request->name, $request->phone);
            // xóa giỏ hàng khi thành công
            Cart::destroy();

        }catch(Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('errors', 'Oh, có chút lỗi, bạn có thể thử lại.');
        }
        return redirect()->route('frontend.home')->with('success', 'Cảm ơn bạn đã đặt hàng, chúng tôi sẽ liên hệ với bạn ngay.');
    }

    // hàm gửi mail
    public function orderMail($touser, $name, $phone) {
        try {
        	// mail gửi cho khách hàng
            Mail::send('version1::mails.order', ['name' => $name, 'touser' => $touser, 'phone' => $phone], function($message) use ($touser, $name, $phone) {
            	$message->from(env('MAIL_ADMIN_CSKH_ORDER'), 'Kaober.com');
            	$message->subject('ĐẶT HÀNG THÀNH CÔNG')
            	    ->to($touser, $name);
            });
            // mail gửi cho admin
            Mail::send('version1::mails.orderadmin', ['name' => $name, 'touser' => $touser, 'phone' => $phone], function($message) use ($touser, $name, $phone) {
            	$message->from( env('MAIL_ADMIN_CSKH_ORDER'), 'Kaober.com' );
            	$message->subject('ĐƠN HÀNG CỦA KHÁCH')
            	    ->to(env('MAIL_ADMIN_CSKH_ORDER'), 'cskh');
            });

        }catch(Exception $e) {
            return redirect()->route('frontend.home');
        }
    }

}
