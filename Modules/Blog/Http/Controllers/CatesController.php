<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Validator;
use DB;

//request
use Modules\Blog\Http\Requests\CateRequest;

//model
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\CateTrans;
// use Modules\Blog\Entities\Post;
use App\Language;
// use Modules\Blog\Entities\PostTrans;

class CatesController extends Controller
{
    /**
     * Display a listing of the category.
     * @return Response
     */
    public function index()
    {
    	$categories = Category::orderBy('cate_id', 'desc')->get();
        return view('blog::cate', compact('categories'));
    }

    // add
    public function addCategoryBlog(CateRequest $request) {
    	// sử dụng transection cho ngoại lệ khi thêm bản ghi >1
    	DB::beginTransaction();
    	try {

	    	$newCategory = new Category;
			$newCategory->title = $request->titleVi;
			$newCategory->description = $request->descriptionVi;
			$newCategory->slug = str_slug($request->slug);
			$newCategory->thumbnail = 'blogcate.png';
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

			// all good
			DB::commit();
	    	
    	} catch(\Exception $e) {
    		DB::rollback();
    		return redirect()->back()->withInput()->with('failed','Lỗi thêm sdanh mục, xin thử lại.');
    	}
    	return redirect()->route('admin::blog::category')->with('success','Thêm danh mục bài viết thành công!');
    }


    // delete
    public function deleteCategory( $cate_id ) {
    	$categoryDelete = Category::find($cate_id);

    	$categoryDelete->delete($cate_id);

    	return redirect()->back()->with('success', 'Xóa danh mục thành công !');
    }

    
}
