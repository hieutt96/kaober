<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', ['as' => 'lockscreen', 'uses' => 'LockscreenController@index']);
Route::post('/home', ['as' => 'lockscreen.post', 'uses' => 'LockscreenController@postLockScreen']);


/*
 * MULTI LANGUAGE
*/
Route::post('/language', ['as' => 'language.selector', 'middleware' => 'LanguageSelector', 'uses' => 'Frontend\LanguageController@change']);
