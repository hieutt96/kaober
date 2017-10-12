<?php

namespace Modules\Shop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

//request
use Modules\Shop\Http\Requests\ShopRequest;

// model
use Modules\Shop\Entities\Shop;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function create(ShopRequest $request)
    {
        try{
        	$shop = new Shop;
        	$shop->title = $request->title;
        	$shop->description = $request->description;
        	$shop->slug = $request->slug;
        	$shop->address = $request->address;
        	$shop->hotline = $request->hotline;
        	$shop->slogan = $request->slogan;
        	$shop->user_id = $request->userId;
        	$shop->meta_description = $request->meta_keyword;
        	$shop->status = $request->status;

	        // lấy đuôi hình ảnh
			$fileExtension =  $request->file('inputImages')->getClientOriginalExtension(); 
	        $fileName = str_slug($request->title).'-'.str_random(10).'.'.$fileExtension;
			$shop->thumbnail = $fileName;

        	$shop->save();

	        // lưu ảnh
			$request->file('inputImages')->move(public_path()."/files/images/",$fileName);

        }catch(\Exception $e) {
        	return redirect()->back()->withInput()->with('failed','Lỗi thêm NCC, xin thử lại.');
        }
        return redirect()->route('admin::shop::lists')->with('success','Thêm NCC thành công!');
    }

 
}
