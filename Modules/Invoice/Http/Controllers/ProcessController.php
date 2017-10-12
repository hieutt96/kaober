<?php

namespace Modules\Invoice\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

//model
use Modules\Invoice\Entities\Order;
use Modules\Blog\Entities\LogAdmin;
use DB;
use Auth;

class ProcessController extends Controller
{
    public function success($order_id, Request $request) {
        DB::beginTransaction();
        try {
            $order = Order::find($order_id);
            $order->status = 1;
            $order->save();

            // log admin action
            $log              = new LogAdmin;
            $log->user_id     = Auth::user()->id;
            $log->email       = Auth::user()->email;
            $log->action      = 'Success';
            $log->ip          = $request->ip();
            $log->description = 'Success order';
            $log->type        = 'hight';
            $log->save();

            DB::commit();
        }catch(\Exceprion $e) {
            DB::rollback();
            return redirect()->back()->with('failed','Lỗi xác nhận đơn hàng, xin thử lại.');
        }
        return redirect()->back()->with('success','Đơn hàng thành công. Đóng đơn hàng.');
    }
}
