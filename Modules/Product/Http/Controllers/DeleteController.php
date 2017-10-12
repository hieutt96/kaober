<?php

namespace Modules\Product\Http\Controllers;

use Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Product\Entities\Product;

use Modules\Product\Entities\LogAdmin;
use Auth;

class DeleteController extends Controller
{

    
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($product_id)
    {
        try{
            // log admin action
            $log              = new LogAdmin;
            $log->user_id     = Auth::user()->id;
            $log->email       = Auth::user()->email;
            $log->action      = 'Deleted';
            $log->ip          = Request::ip();
            $log->description = 'Delete Blog';
            $log->type        = 'normal';
            $log->save();

            $productDelete = Product::find($product_id);
            $productDelete->delete($product_id);
        }catch (\Exception $e) {
            return redirect()->route('admin::product::lists')->with('failed','Lỗi xóa sản phẩm, xin thử lại.');
        }

        return redirect()->route('admin::product::lists')->with('success', 'Xóa sản phẩm thành công !');
    }

    
}
