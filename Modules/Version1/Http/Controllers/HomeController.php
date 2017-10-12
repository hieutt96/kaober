<?php

namespace Modules\Version1\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\Version1\Entities\Product;
use Modules\Version1\Entities\Category;
use Modules\Version1\Entities\Shop;

class HomeController extends Controller
{

    public function index()
    {
    	// list product
    	$products = Product::orderBy('product_id', 'desc')->where('status', 1)->paginate(12);
    	// $products->withPath('page');
    	// dd($products->render());
        return view('version1::pages.home', compact('products'));
    }
}
