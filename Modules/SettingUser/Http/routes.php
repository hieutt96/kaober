<?php

Route::group(['middleware' => 'web', 'prefix' => 'settinguser', 'namespace' => 'Modules\SettingUser\Http\Controllers'], function()
{
    Route::get('/', 'SettingUserController@index');
});
