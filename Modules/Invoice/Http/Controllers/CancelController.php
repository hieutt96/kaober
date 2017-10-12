<?php

namespace Modules\Invoice\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Blog\Entities\LogAdmin;
use DB;
use Auth;

//model
use Modules\Invoice\Entities\Order;

class CancelController extends Controller
{
    /**
     * Display a listing of the resource.
     * TRẠNG THÁI ĐOEN HÀNG status: 0: chờ xử lý, 1: đã thành công,2: đang xử lý 3: đã bị hủy
     * @return Response
     */
    public function index()
    {
            $orders = Order::orderBy('order_id', 'desc')->where('status', 3)->get();
            return view('invoice::cancel', compact('orders'));
    }

    public function cancel($order_id, Request $request) {
        DB::beginTransaction();
        try {
            $order = Order::find($order_id);
            $order->status = 3;
            $order->save();

            // log admin action
            $log              = new LogAdmin;
            $log->user_id     = Auth::user()->id;
            $log->email       = Auth::user()->email;
            $log->action      = 'Deleted';
            $log->ip          = $request->ip();
            $log->description = 'Cancel order';
            $log->type        = 'hight';
            $log->save();

            DB::commit();
        }catch(\Exceprion $e) {
            DB::rollback();
            return redirect()->back()->with('failed','Lỗi hủy đơn hàng, xin thử lại.');
        }
        return redirect()->back()->with('success','Hủy đơn hàng thành công.');
    }


}
