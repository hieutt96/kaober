<?php

namespace Modules\Invoice\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

//model
use Modules\Invoice\Entities\Order;

class ProcessingController extends Controller
{
    /**
     * đơn hàng đang xử lý: 2
     */
    public function processing($order_id)
    {
        try {
            $order = Order::find($order_id);
            $order->status = 2;
            $order->save();
        }catch(\Exceprion $e) {
            return redirect()->back()->with('failed','Lỗi đơn hàng, xin thử lại.');
        }
        return redirect()->back()->with('success','Đơn hàng đang xử lý.');
    }

}
