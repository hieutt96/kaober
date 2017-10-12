<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{


    public function index()
    {
        return view('frontend::pages.home');
    }

    public function book()
    {
        return view('frontend::pages.book');
    }

    
}
