<?php

Route::group(['middleware' => 'web', 'prefix' => 'pagemanager', 'namespace' => 'Modules\PageManager\Http\Controllers'], function()
{
    Route::get('/', 'PageManagerController@index');
});
