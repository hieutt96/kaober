<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\User\Entities\User;

class EditController extends Controller
{

    public function index($id)
    {
        $user = User::find($id);

        return view('user::edit', compact('user'));
    }

    
}
