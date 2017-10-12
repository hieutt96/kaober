<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Frontend\Http\Controllers'], function()
{
    Route::get('/', 'HomeController@index');
    Route::get('/book', 'HomeController@book');
});

Route::get('test', function() {
    return view('frontend::home');
});

Route::get('job', function() {
    return view('frontend::job');
});

Route::get('invest', function() {
    return view('frontend::invest');
});

Route::get('news', function() {
    return view('frontend::news');
});

Route::get('getlogin', function() {
    return view('frontend::login');
});

Route::get('getsignup', function() {
    return view('frontend::signup');
});

Route::get('resetpassword', function() {
    return view('frontend::password');
});

Route::get('register', function() {
    return view('frontend::register');
});

Route::get('help', function() {
    return view('frontend::help');
});

