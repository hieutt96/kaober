<?php

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin/user', 'namespace' => 'Modules\User\Http\Controllers', 'as' => 'admin::user::'], function()
{
	// list user
    Route::get('/lists', ['as' => 'lists', 'uses' => 'UserController@index']);
    // add new user
    Route::post('/lists', ['as' => 'lists::post', 'uses' => 'UserController@addUser']);
    // delete user
    Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'DeleteController@index']);
    // list admin
    Route::get('/lists/admin', ['as' => 'lists::admin', 'uses' => 'AdminController@index']);
    // list ncc
    Route::get('/lists/ncc', ['as' => 'lists::ncc', 'uses' => 'NccController@index']);

    // sửa và xem profile
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'EditController@index']);
    Route::post('update/password', ['as' => 'update::password', 'uses' => 'ResetPasswordController@edit']);
    Route::post('update/profile', ['as' => 'update::profile', 'uses' => 'UpdateProfileController@update']);

    // set role user: 1.admin, 2:ncc, 0:user
    Route::get('role/admin/{id}', ['as' => 'role::admin', 'uses' => 'RoleController@isAdmin']);
    Route::get('role/ncc/{id}', ['as' => 'role::ncc', 'uses' => 'RoleController@isNcc']);
    Route::get('role/user/{id}', ['as' => 'role::user', 'uses' => 'RoleController@isUser']);

    Route::get('block/{id}', ['as' => 'role::block', 'uses' => 'RoleStatusController@isBlock']);
    Route::get('open/{id}', ['as' => 'role::open', 'uses' => 'RoleStatusController@isOpen']);

    // hoạt động người dùng
    Route::get('/logs', ['as' => 'logs', 'uses' => 'LogController@index']);


});
