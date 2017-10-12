<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\User\Entities\User;

class RoleController extends Controller
{

    // quyền người dùng
    public function isAdmin($id) {
        try{
            $user = User::find($id);
            $user->level = 1;
            $user->save();
        }catch(\Exceprion $e) {
            return redirect()->back()->with('failed','Lỗi chuyển đổi, xin thử lại.');
        }
        return redirect()->back()->with('success','Chuyển đổi quyền quản trị thành công.');
    }

    // quyền làm nhà cung cấp, level:2
    public function isNcc($id) {
        try{
            $user = User::find($id);
            $user->level = 2;
            $user->save();
        }catch(\Exceprion $e) {
            return redirect()->back()->with('failed','Lỗi chuyển đổi, xin thử lại.');
        }
        return redirect()->back()->with('success','Chuyển đổi quyền nhà cung cấp thành công.');
    }

    // quyền quản trị viên: level :1
    public function isUser($id) {
        try{
            $user = User::find($id);
            $user->level = 0;
            $user->save();
        }catch(\Exceprion $e) {
            return redirect()->back()->with('failed','Lỗi chuyển đổi, xin thử lại.');
        }
        return redirect()->back()->with('success','Chuyển đổi quyền người dùng thành công.');
    }

}
