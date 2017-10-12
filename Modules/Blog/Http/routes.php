<?php

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin/blog', 'namespace' => 'Modules\Blog\Http\Controllers', 'as' => 'admin::blog::'], function()
{
	// danh sách bài viết
    Route::get('lists', ['as' => 'lists', 'uses' => 'ListsController@index']);

    // thêm bài viết
    Route::get('add', ['as' => 'add', 'uses' => 'AddPostsController@index']);
    Route::post('add', ['as' => 'add.post', 'uses' => 'AddPostsController@postAddPost']);
    // xóa bài viết
    Route::get('delete/{post_id}', ['as' => 'delete', 'uses' => 'DeleteController@index']);

    // sửa bai viết
    Route::get('edit/{post_id}', ['as' => 'edit', 'uses' => 'EditPostController@index']);
    Route::post('edit/{post_id}', ['as' => 'edit', 'uses' => 'EditPostController@postEditPost']);


    // danh sách và thêm category
    Route::get('categories', ['as' => 'category', 'uses' => 'CatesController@index']);
    Route::post('categories', ['as' => 'category::add', 'uses' => 'CatesController@addCategoryBlog']);
    //xóa danh mục
    Route::get('category/delete/{cate_id}', ['as' => 'category::delete', 'uses' => 'CatesController@deleteCategory']);
    // sửa danh mục, sử dụng modal
    Route::post('categories/edit/{cate_id}', ['as' => 'category::edit', 'uses' => 'EditCateController@editCate']);

});
