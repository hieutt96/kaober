<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use DB;

//model
use Modules\Product\Entities\Category;
use Modules\Product\Entities\CateTrans;
use App\Language;

class EditCateController extends Controller
{
    /**
     * Edit category via cate_id.
     * @return Response
     */
    public function editCate($cate_id, Request $request)
    {
        DB::beginTransaction();
        try {

            $cateVi = Category::find($cate_id);
            $cateVi->title = $request->titleViEdit;
            $cateVi->description = $request->descriptionViEdit;
            $cateVi->status = $request->statusEdit;
            $cateVi->save();

            CateTrans::where('cate_id', $cate_id)
                            ->update(['title'=>$request->titleEnEdit, 'description'=>$request->descriptionEnEdit]);

            DB::commit();
        }catch(\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('failed','Lỗi sửa danh mục, xin thử lại.');
        }
        return redirect()->route('admin::product::category')->with('success','Sửa danh mục sản phẩm thành công!');
    }

}
