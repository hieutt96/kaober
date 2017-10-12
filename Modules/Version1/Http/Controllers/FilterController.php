<?php

namespace Modules\Version1\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Input;

// model
use Modules\Version1\Entities\Product;

class FilterController extends Controller
{


    public function index(Request $request)
    {
    	$filter =  $request->input('filtersearch');
        if(!empty($filter)) {
        	// dd($filter);
        	$products = Product::orderBy('product_id', 'desc')->whereIn('cate_id', $filter)->where('status', 1)->paginate(24);
        	return view('version1::pages.home', compact('products'));
        }else {
        	return redirect('/');
        }
    }

}
