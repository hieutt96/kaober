<?php

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin/shop', 'namespace' => 'Modules\Shop\Http\Controllers', 'as' => 'admin::shop::'], function()
{
    // list user
    Route::get('lists', ['as' => 'lists', 'uses' => 'ListController@index']);
    // thêm nhà cung cấp mới
    Route::post('lists', ['as' => 'add::post', 'uses' => 'AddController@create']);
    // sửa thông tin NCC
    Route::get('edit/{shop_id}', ['as' => 'edit', 'uses' => 'EditController@update']);

});