<?php

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers', 'as' => 'admin::'], function()
{

    Route::get('/home', ['as' => 'home', 'uses' => 'AdminController@index']);
    // route thống kê
    Route::group(['prefix' => 'thongke', 'as' => 'thongke::'], function() {
        Route::get('/user', ['as' => 'user', 'uses' => 'ThongkeUserController@index']);
        Route::get('/order', ['as' => 'order', 'uses' => 'ThongkeOrderController@index']);
    });

});