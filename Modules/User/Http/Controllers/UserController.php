<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\User\Entities\User;

//request
use Modules\User\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->where('level', 0)->get();
        return view('user::lists', compact('users'));
    }

    public function addUser(UserRequest $request) {
    	try{

    		$user = new User;
    		$user->firstname = $request->firstname;
    		$user->lastname = $request->lastname;
    		$user->email = $request->email;
    		$user->password = bcrypt($request->password);
    		$user->status = $request->status;
    		$user->level = $request->level;
    		$user->save(); 

    	}catch(\Exception $e) {
    		return redirect()->back()->withInput()->with('failed','Lỗi thêm user, xin thử lại.');
    	}
    	return redirect()->route('admin::user::lists')->with('success','Thêm người dùng thành công!');
    }

}
