<?php

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin/feedback', 'namespace' => 'Modules\Feedback\Http\Controllers', 'as' => 'admin::feedback::'], function()
{
	// danh sách ticket
    Route::get('ticket/lists', ['as' => 'lists', 'uses' => 'FeedbackController@index']);

    // tạo nhóm ticket
    // Route::get('group/lists', ['as' => 'lists', 'uses' => 'FeedbackController@index']);

});
