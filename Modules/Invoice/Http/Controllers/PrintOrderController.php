<?php

namespace Modules\Invoice\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\Invoice\Entities\Product;
use Modules\Invoice\Entities\Order;
use Modules\Invoice\Entities\ProductOrder;
use Modules\Invoice\Entities\Shop;

class PrintOrderController extends Controller
{


    public function index($order_id)
    {
    	$order = Order::find($order_id);
    	$orderProducts = $order->productOrders()->get();
        return view('invoice::print', compact('order', 'orderProducts'));
    }

    public function show($order_id)
    {
    	$order = Order::find($order_id);
    	$orderProducts = $order->productOrders()->get();
        return view('invoice::viewOrder', compact('order', 'orderProducts'));
    }

}
