<?php

namespace Modules\Version1\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\Version1\Entities\Product;

class SearchController extends Controller
{
    /**
     * @return Response: search product
     */
    public function index(Request $request)
    {
    	if($request->productsearch) {
    		$products = Product::where('title', 'LIKE' , '%'.$request->productsearch.'%')->where('status', 1)->get();

    		if($products->count()) {
    			return view('version1::pages.home', compact('products'));
    		}else {
    			return view('version1::pages.searchnoresult');
    		}
    	}else {
    		return redirect()->route('frontend.home');
    	}
    }
}
