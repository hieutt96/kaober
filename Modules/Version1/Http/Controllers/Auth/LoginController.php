<?php

namespace Modules\Version1\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{

    public function index()
    {
        return view('version1::index');
    }


}
