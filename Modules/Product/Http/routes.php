<?php

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin/product', 'namespace' => 'Modules\Product\Http\Controllers', 'as' => 'admin::product::'], function()
{


	// danh sách sản phẩm
    Route::get('lists', ['as' => 'lists', 'uses' => 'ListsController@index']);
    // thêm mới sản phẩm
    Route::get('add', ['as' => 'add', 'uses' => 'AddController@index']);
    Route::post('add', ['as' => 'add.post', 'uses' => 'AddController@postProduct']);
    // xóa sản phẩm
    Route::get('delete/{product_id}', ['as' => 'delete', 'uses' => 'DeleteController@index']);
    // sửa sản phẩm
    Route::get('edit/{product_id}', ['as' => 'edit', 'uses' => 'EditController@index']);
    Route::post('edit/{product_id}', ['as' => 'edit', 'uses' => 'EditController@postEditProduct']);

    // danh sách category
    Route::get('categories', ['as' => 'category', 'uses' => 'CateController@index']);
    // thêm sửa xóa danh mục bằng ajax
    Route::post('categories', ['as' => 'category::add', 'uses' => 'CateController@postAddCategoryProduct']);
    //xóa
    Route::get('category/delete/{cate_id}', ['as' => 'category::delete', 'uses' => 'CateController@deleteCategory']);
    // sửa danh mục
    Route::post('categories/edit/{cate_id}', ['as' => 'category::edit', 'uses' => 'EditCateController@editCate']);

});
