<?php

namespace Modules\Version1\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Cart;
use DB;

class CheckoutController extends Controller
{

    public function index()
    {
    	$carts = Cart::content();
    	$cities = DB::table('cities')->select('city_id', 'name')->get();
        return view('version1::pages.checkout', compact('carts', 'cities'));
        dd($carts);
    }

}
