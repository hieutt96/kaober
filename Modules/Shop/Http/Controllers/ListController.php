<?php

namespace Modules\Shop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\Shop\Entities\Shop;
use Modules\Shop\Entities\User;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $shops = Shop::orderBy('shop_id', 'desc')->get();
        $users = User::select('id', 'firstname', 'lastname', 'email', 'phone')->whereIn('level', [1, 2])->where('status', 1)->get();
        return view('shop::lists', compact('shops', 'users'));
    }

}
