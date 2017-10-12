<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\User\Entities\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $admins = User::orderBy('id', 'desc')->where('level', 1)->get();
        return view('user::listadmin', compact('admins'));
    }

    
}
