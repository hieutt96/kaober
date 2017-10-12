<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Validator;
use DB;
// use Response;

//request
use Modules\Product\Http\Requests\CateRequest;

//model
use Modules\Product\Entities\Category;
use Modules\Product\Entities\CateTrans;
use App\Language;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
    	$categories = Category::orderBy('cate_id', 'desc')->get();
        return view('product::cate', compact('categories'));
    }

    // add
    public function postAddCategoryProduct(CateRequest $request) {
        DB::beginTransaction();
    	try {

            $newCategory = new Category;
            $newCategory->title = $request->titleVi;
            $newCategory->description = $request->descriptionVi;
            $newCategory->slug = str_slug($request->slug);
            $newCategory->thumbnail = 'shopcate.png';
            $newCategory->status = $request->status;
            $newCategory->save();

            // thêm bảng dịch
            $cateTran = new CateTrans;
            $cateTran->title = $request->titleEn;
            $cateTran->description = $request->descriptionEn;
            $cateTran->cate_id = $newCategory->cate_id;
            //ngôn ngữ
            $language = Language::select('slug', 'lang_id')->where('slug', 'en')->first();
            $cateTran->lang_id = $language->lang_id;
            $cateTran->save();


            DB::commit();
            
        } catch(\Exception $e) {
            DB::rollback();
            return redirect()->route('admin::blog::category')->withInput()->with('failed','Lỗi thêm sản phẩm, xin thử lại.');
        }
    	
    	return redirect()->route('admin::product::category')->with('success','Thêm danh mục sản phẩm thành công!');
    }

    // delete
    public function deleteCategory( $cate_id ) {
    	$categoryDelete = Category::find($cate_id);

    	$categoryDelete->delete($cate_id);

    	return redirect()->route('admin::product::category')->with('success', 'Xóa danh mục thành công !');
    }

    
}
