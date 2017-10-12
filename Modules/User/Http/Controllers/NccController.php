<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\User\Entities\User;

class NccController extends Controller
{


    public function index()
    {
    	// NCC có thể là admin hoặc ncc: 1,2
        $listNccs = User::orderBy('id', 'desc')->whereIn('level', [1, 2])->get();
        return view('user::listncc', compact('listNccs'));
    }

    
}
