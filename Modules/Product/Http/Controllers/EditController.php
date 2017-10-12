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
use App\Language;
use DB;

//request
use Modules\Product\Http\Requests\EditProductRequest;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($product_id)
    {
    	$productEdit = Product::findOrFail($product_id)->toArray();
    	$productEditTrans = ProductTrans::
                                where('product_id', $product_id)
                                ->first();
        $categories = Category::select('cate_id', 'title')
                                ->whereNotIn('cate_id', [$productEdit['cate_id']])
                                ->get();
        // get name cate curent
        $cateCurent = Category::select('cate_id', 'title')
                                ->where('cate_id', $productEdit['cate_id'])
                                ->first();

        // get shop current
        $shopCurrent = Shop::select('shop_id', 'title')
                        ->where('shop_id', $productEdit['shop_id'])
                        ->first();

        $shops       = Shop::select('shop_id', 'title')
                        ->whereNotIn('shop_id', [$productEdit['shop_id']])
                        ->get();

        return view('product::edit', compact('productEditTrans', 'productEdit', 'categories', 'cateCurent', 'shopCurrent', 'shops'));
    }

    // post product edit
    public function postEditProduct(EditProductRequest $request, $product_id) {
    	try{

			$product              = Product::find($product_id);
			$product->title       = $request->titleProductVi;
			$product->description = $request->descriptionProductVi;
			$product->price       = $request->priceProduct;
			$product->discount    = $request->priceProductDiscount;

    	    // kiển tra hình ảnh hiện tại và kiểm tra có thêm mới hay ko
            if(($request->file('inputImages')) != null){
            	$fileExtension =  $request->file('inputImages')->getClientOriginalExtension(); 
            	$fileName = str_slug($request->titleProductVi).'-'.str_random(10).'.'.$fileExtension;
            	// lưu ảnh
            	$request->file('inputImages')->move(public_path()."/files/images/",$fileName);
            	$product->thumbnail = $fileName;
            }else {
            	$imgCurrent = $request->thumbnailEdit;
            	$product->thumbnail = $imgCurrent;
            }

			$product->slug             = str_slug($request->slug);
			$product->status           = $request->status;
			$product->cate_id          = $request->selectCate;
			$product->shop_id          = $request->provider;
			$product->meta_description = $request->metakeyProductVi;
			$product->meta_keyword     = $request->keywordProductVi;
            $product->save();

			// cập nhật bảng dịch
			$peoductTrans = ProductTrans::where('product_id', $product_id)
			            ->update([
							'title'            => $request->titleProductEn,
							'description'      => $request->descriptionProductEn,
							'meta_description' => $request->metakeyProductEn,
							'product_id'       => $product_id,
							'meta_keyword'     => $request->keywordProductEn
			            ]);

    	}catch (\Exception $e) {
    	    return redirect()->back()->withInput()->with('failed','Lỗi cập nhật sản phẩm, xin thử lại.');
    	}
    	
    	return redirect()->route('admin::product::lists')->with('success','Cập nhật sản phẩm thành công!');
    }

    
}
