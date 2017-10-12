<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\Product\Entities\Shop;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\ProductTrans;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Attribute;
use Modules\Product\Entities\Value;
use Modules\Product\Entities\LogAdmin;
use Modules\Product\Entities\Review;
use App\Language;
use DB;
use Auth;

//request
use Modules\Product\Http\Requests\ProductRequest;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

    	$categories = Category::select('cate_id', 'title')->get();

        // danh sách nhà cung cấp
        $shops = Shop::select('shop_id', 'title')->get();
        return view('product::add', compact('categories', 'shops'));
    }

    public function postProduct(ProductRequest $request) {

    	DB::beginTransaction();

    	try {
    		// thêm vào bảng product
			$newProduct = new Product;
			$newProduct->title = $request->titleProductVi;
			$newProduct->price = $request->priceProduct;

            if($request->priceProductDiscount) {
                $newProduct->discount = $request->priceProductDiscount;
            }else {
                $newProduct->discount = $request->priceProduct;
            }

			$newProduct->description = $request->descriptionProductVi;
			

            // lấy đuôi hình ảnh và thêm ảnh
            $fileExtension =  $request->file('inputImages')->getClientOriginalExtension(); 
            $fileName = str_slug($request->titleProductVi).'-'.str_random(10).'.'.$fileExtension;
            // lưu ảnh
            $request->file('inputImages')->move(public_path()."/files/images/",$fileName);
            $newProduct->thumbnail = $fileName;
			
            $newProduct->slug             = str_slug($request->slug);
            $newProduct->status           = $request->status;
            $newProduct->cate_id          = $request->selectCate;
            $newProduct->shop_id          = $request->provider;
            $newProduct->meta_description = $request->metakeyProductVi;
            $newProduct->meta_keyword     = $request->keywordProductVi;
            $newProduct->save();

            // thêm review
            // if($request->reviewproduct) {
            //     $review = new Review;
            //     $review->product_id = $newProduct->product_id;
            //     $review->review = $request->reviewproduct;
            //     $languagereview = Language::select('slug', 'lang_id')->where('slug', 'vi')->first();
            //     $review->lang_id = $languagereview->lang_id;
            //     $review->star = 5;
            //     $review->user_id = Auth::id();
            //     $review->status = 1;
            //     $review->save();
            // }


    		// thêm vào ngôn ngữ t.a
            $productTran                   = new ProductTrans;
            $productTran->title            = $request->titleProductEn;
            $productTran->description      = $request->descriptionProductEn;
            $productTran->product_id       = $newProduct->product_id;
            $productTran->meta_keyword     = $request->keywordProductEn;
            $productTran->meta_description = $request->metakeyProductEn;

            $language = Language::select('slug', 'lang_id')->where('slug', 'en')->first();
            $productTran->lang_id = $language->lang_id;
            $productTran->save();

            // log admin action
            $log              = new LogAdmin;
            $log->user_id     = Auth::user()->id;
            $log->email       = Auth::user()->email;
            $log->action      = 'Created';
            $log->ip          = $request->ip();
            $log->description = 'Created Product';
            $log->type        = 'normal';
            $log->save();

    	    DB::commit();
    	    // all good
    	} catch (\Exception $e) {
    	    DB::rollback();
    	    return redirect()->back()->withInput()->with('failed','Lỗi thêm sản phẩm, xin thử lại.');
    	}
        return redirect()->route('admin::product::add')->with('success','Thêm sản phẩm thành công!');
    }

    
}
