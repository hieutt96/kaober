<?php

Route::group(['namespace' => 'Modules\Auth\Http\Controllers', 'middleware' => 'web'], function()
{

	// đăng ký người dùng
	Route::get('dang-ky', ['as'=>'register', 'uses'=>'RegisterController@getRegister']);
	Route::post('dang-ky', ['as'=>'register.post', 'uses'=>'RegisterController@postRegister']);

	// đăng nhập
	Route::get('dang-nhap', ['as'=>'login', 'uses'=>'LoginController@getLogin']);
	Route::post('dang-nhap', ['as'=>'login.post', 'uses'=>'LoginController@postLogin']);

	//đăng xuất
	Route::get('dang-xuat', ['as'=>'logout', 'uses'=>'LoginController@logout']);

	// xác nhận tài khoản email
	Route::get('confirm/{token}', ['as'=>'register_confirm', 'uses'=>'RegisterController@confirmRegister']);

	// reset password:  điền thông tin email để gửi token
	Route::get('resetpassword', ['as'=>'password.reset' ,'uses' => 'PasswordController@getFormPassword']);
	Route::post('resetpassword', ['as'=>'password.reset' ,'uses' => 'PasswordController@postSenLinkResetPassword']);

	// lấy token để tạo mới mật khẩu
	Route::get('password/{token}', ['as'=>'password.new' ,'uses' => 'PasswordController@showResetForm']);
	Route::post('password/{token}', ['as'=>'password.new.post' ,'uses' => 'PasswordController@resetPassword']);


});
