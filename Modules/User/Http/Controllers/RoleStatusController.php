<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\User\Entities\User;

class RoleStatusController extends Controller
{
    
    // khóa tài khoản , chuyển trạng thái 
    public function isBlock($id) {
        try{
            $user = User::find($id);
            $user->status = 0;
            $user->save();
        }catch(\Exceprion $e) {
            return redirect()->back()->with('failed','Lỗi khóa tài khoản, xin thử lại.');
        }
        return redirect()->back()->with('success','Khóa tài khoản thành công.');
    }

    // mở tài khoản , chuyển trạng thái 
    public function isOpen($id) {
        try{
            $user = User::find($id);
            $user->status = 1;
            $user->save();
        }catch(\Exceprion $e) {
            return redirect()->back()->with('failed','Lỗi mở tài khoản, xin thử lại.');
        }
        return redirect()->back()->with('success','Mở tài khoản thành công.');
    }

}
