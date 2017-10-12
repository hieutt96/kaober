<?php

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin/settingadmin', 'namespace' => 'Modules\SettingAdmin\Http\Controllers', 'as' => 'admin::settingadmin::'], function()
{
    Route::get('theme',['as' => 'theme', 'uses' => 'SettingAdminController@index']);

    // setting theme admin
    Route::get('theme/{name}',['as' => 'theme::name', 'uses' => 'SettingAdminController@theme']);
    Route::get('sidebar/{name}',['as' => 'sidebar::name', 'uses' => 'SettingAdminController@sidebar']);
    Route::get('collapse/{name}',['as' => 'collapse::name', 'uses' => 'SettingAdminController@collapse']);

});
