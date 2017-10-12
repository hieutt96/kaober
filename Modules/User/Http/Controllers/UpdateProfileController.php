<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\User\Http\Requests\UpdateProfileRequest;

use Modules\User\Entities\User;
use Auth;

class UpdateProfileController extends Controller
{

    public function update(UpdateProfileRequest $request)
    {
        try{
            $user = User::find(Auth::User()->id)->first();
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->slogan = $request->slogan;
            $user->about = $request->about;
            $user->cardnumber = $request->cardnumber;
            $user->birthday = $request->birthday;
            $user->save();
        }catch(\Exception $e) {
            return redirect()->back()->with('failed','Lỗi cập nhật thông tin, xin thử lại.');
        }
        return redirect()->back()->with('success','Cập nhật thông tin thành công!');
    }

}
