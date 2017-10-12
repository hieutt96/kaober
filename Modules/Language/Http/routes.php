<?php

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin/language', 'namespace' => 'Modules\Language\Http\Controllers', 'as' => 'admin::language::'], function()
{

    Route::get('lists', ['as' => 'lists', 'uses' => 'LanguageController@index']);


});
