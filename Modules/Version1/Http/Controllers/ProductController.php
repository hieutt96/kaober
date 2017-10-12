<?php

namespace Modules\Version1\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\Version1\Entities\Product;
use Modules\Version1\Entities\Category;
use Modules\Version1\Entities\Shop;
use Modules\Version1\Entities\Review;

use DB, Auth;

class ProductController extends Controller
{


    public function index($slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	$productRelates = Product::limit(6)->inRandomOrder()->whereNotIn('product_id', [$product->product_id])->get();
        // ->where('status', 1)
        $reviews = $product->review()->get();
        return view('version1::pages.product', compact('product', 'productRelates', 'reviews'));
    }

    public function review(Request $request, $product_id) {
    	try{
            if($request->reviewproduct) {
                $review = new Review;
                $review->product_id = $product_id;
                $review->review = $request->reviewproduct;
                $review->star = 5;
                $review->status = 0;
                $review->lang_id = 1;
                $review->user_id = Auth::id();
                $review->save();
            }
        }catch(\Exception $e) {
            return redirect()->back()->with('success', 'Đánh giá không hợp lê, xin thử lại.');
        }
    	return redirect()->back()->with('success', 'Cảm ơn bạn đã đánh giá.');
    }

}
