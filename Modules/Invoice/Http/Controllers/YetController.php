<?php

namespace Modules\Invoice\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

//model
use Modules\Invoice\Entities\Product;
use Modules\Invoice\Entities\Order;
use Modules\Invoice\Entities\ProductOrder;
use Modules\Invoice\Entities\Shop;

use DB;

class YetController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $orders = Order::orderBy('order_id', 'desc')->where('status', 0)->get();
        return view('invoice::yet', compact('orders'));
    }

    public function yet($order_id) {
    	try {
            $order = Order::find($order_id);
            $order->status = 0;
            $order->save();
        }catch(\Exceprion $e) {
            return redirect()->back()->with('failed','Lỗi đơn hàng, xin thử lại.');
        }
        return redirect()->back()->with('success','Chuyển trạng thái  đơn hàng, đơn hàng chờ xử lý.');
    }
    
}
