<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ThongkeOrderController extends Controller
{


    public function index()
    {
        return view('admin::thongke.order');
    }

   
}
