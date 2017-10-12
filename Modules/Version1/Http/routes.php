<?php

Route::group(['middleware' => 'web', 'as' => 'frontend.', 'namespace' => 'Modules\Version1\Http\Controllers'], function()
{
	// trang chủ
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    // trang chi tiết sản phẩm
    Route::get('shop/product/{slug}', ['as' => 'product', 'uses' => 'ProductController@index']);
    Route::post('shop/product/review/{product_id}', ['as' => 'product.review', 'uses' => 'ProductController@review']);

    // Trang giỏ hàng
    Route::get('shop/addtocart/{product_id}', ['as' => 'addtocart', 'uses' => 'CartController@addToCart']);
    Route::get('shop/cart', ['as' => 'cart', 'uses' => 'CartController@index']);
    // xóa sản phẩm trong giỏ hàng
    Route::get('shop/cart/delete/{rowId}', ['as' => 'cart.delete', 'uses' => 'CartController@delete']);
    // cập nhật giỏ hàng
    Route::post('shop/cart/update/{rowid}/{qty}', ['as' => 'cart.update', 'uses' => 'CartController@update']);

    // Trang thanh toán sau khi đã đăng nhập
    Route::get('shop/checkout/step1', ['as' => 'checkout.step1', 'uses' => 'CheckoutController@index']);
    Route::post('shop/checkout/step1', ['as' => 'checkout.step1.post', 'uses' => 'OrderController@create']);


    /*
	 * LOGIN MXH
    */
    Route::group(['prefix' => 'auth/facebook'], function()
    {  
    	// LOGIN FACEBOOK
        Route::get('/', ['as' => 'facebook.login', 'uses' => 'FacebookController@redirectToProvider']);
        Route::get('callback', ['as' => 'facebook.callback', 'uses' => 'FacebookController@handleProviderCallback']);
        Route::get('logout', ['as' => 'facebook.logout', 'uses' => 'FacebookController@logoutFB']);
    });

    /*
     * ROUTE BLOG, INVEST ...help
    */

    // help center
    Route::get('help', ['as' => 'help', 'uses' => 'HelpCenterController@index']);

    // blog
    Route::get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);
    Route::get('blog/{slug}', ['as' => 'blog.post', 'uses' => 'BlogController@post']);
    Route::get('blog/category/{cate_id}', ['as' => 'blog.category', 'uses' => 'BlogController@cate']);
    Route::post('blog/sendmail', ['as' => 'blog.sendmail', 'uses' => 'MailController@sub']);


    /*
     * TÌM KIẾM
    */
    // tìm kiếm sản phẩm home
    Route::get('search', ['as' => 'search.product', 'uses' => 'SearchController@index']);

    // chức năng filter
    Route::get('filter', ['as' => 'filter.product', 'uses' => 'FilterController@index']);

    // chức năng đặt sách giúp khi sản phẩm tìm kiếm ko có
    Route::post('search/orderbook', ['as' => 'search.orderbook', 'uses' => 'OrderBookController@create']);


    // paypal source
    Route::resource('payment', 'PaymentController');

});
