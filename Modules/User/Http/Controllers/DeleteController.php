<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\User\Entities\User;

class DeleteController extends Controller
{

    public function index($id)
    {
        $user = User::find($id);
        
        $user->delete($id);

        return redirect()->route('admin::user::lists')->with('success', 'Xóa tài khoản thành công !');
    }
    
}
