<?php

namespace Modules\Admin\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
// MODEL, DB
use DB;
use Auth;
use Request;

use Illuminate\Support\Facades\Log;
// model
use Modules\Admin\Entities\LogAdmin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        // Log::info('admin đã login: '. Auth::user()->email);
    	$posts = count(DB::table('blog_posts')->select('post_id')->get());
        // $posts = DB::table('blog_posts')->count();
    	$products = count(DB::table('shop_products')->select('product_id')->get());
    	$invoices = count(DB::table('orders')->select('order_id')->get());
    	$users = count(DB::table('users')->select('id')->get());

        // log admin action
        $logs = LogAdmin::orderBy('created_at', 'desc')->get();

        return view('admin::home', compact('posts', 'invoices', 'users', 'products', 'logs'));
    }

    
}
