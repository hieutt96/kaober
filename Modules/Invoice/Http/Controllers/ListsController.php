<?php

namespace Modules\Invoice\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

//model
use Modules\Invoice\Entities\Order;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     * 1 là đơn hàng đã thành công, 0: đơn hàng chờ xử lý, 2: đơn hàng đang xử lý, 3: 	đơn hàng đã hủy
     */
    public function index()
    {
    	$orders = Order::orderBy('order_id', 'desc')->where('status', 1)->get();
        return view('invoice::lists', compact('orders'));
    }

    public function all() {
    	$orders = Order::orderBy('order_id', 'desc')->get();
        return view('invoice::all', compact('orders'));
    }

    
}
