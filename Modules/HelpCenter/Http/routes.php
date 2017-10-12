<?php

Route::group(['middleware' => 'web', 'prefix' => 'helpcenter', 'namespace' => 'Modules\HelpCenter\Http\Controllers'], function()
{
    Route::get('/', 'HelpCenterController@index');
});
