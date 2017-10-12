<?php

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin/filemanager', 'namespace' => 'Modules\Filemanager\Http\Controllers', 'as' => 'admin::filemanager::'], function()
{
    Route::get('/files', ['as' => 'images', 'uses' => 'FilemanagerController@index'] );
});
