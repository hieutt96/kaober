<?php

namespace Modules\Version1\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Request;
// model
use Modules\Version1\Entities\Product;
use Modules\Version1\Entities\Category;
use Modules\Version1\Entities\Shop;

use Cart;

class CartController extends Controller
{

	public function index() {
		$carts = Cart::content();
        // dd($carts);
		return view('version1::pages.cart', compact('carts'));
	}

    // thêm sản phẩm vào giỏ hàng
    public function addToCart( $product_id )
    {
    	$product = Product::find($product_id);
    	Cart::add(['id' => $product->product_id, 'name' => $product->title, 'qty' => 1, 'price' => $product->price, 'options' => ['thumbnail' => $product->thumbnail] ]);
    	// $content = Cart::content();
    	// dd($content);
        return redirect()->route('frontend.cart');
    }
    
    // xóa sản phẩm trong giỏ hàng
    public function delete ($rowId) {
        Cart::remove($rowId);
        return redirect()->back();
    }

    // cập nhật sô lượng sản phẩm trong giỏ hàng
    public function update() {
        if(Request::ajax()) {
           $id = Request::get('id');
           $qty = Request::get('qty');
           Cart::update($id, $qty);
           return 'kaober';
        } 
    } 

}
