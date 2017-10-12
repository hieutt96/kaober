<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Category;

class ListsController extends Controller
{
    /**
     * Display a listing of the product.
     * @return Response
     */
    public function index()
    {
    	// list product
    	$products = Product::orderBy('product_id', 'desc')->get();
    	// list cate
    	$categories = Category::get();

        return view('product::lists', compact('products', 'categories'));
    }
    
}
