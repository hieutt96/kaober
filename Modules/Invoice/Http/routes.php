<?php

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin/invoice', 'namespace' => 'Modules\Invoice\Http\Controllers', 'as' => 'admin::invoice::'], function()
{
	// danh sách hóa  đơn thành công
    Route::get('lists', ['as' => 'lists', 'uses' => 'ListsController@index']);
    // danh sách hóa đơn các loại
    Route::get('all', ['as' => 'all', 'uses' => 'ListsController@all']);
    // thêm hóa đơn
    Route::get('add', ['as' => 'add', 'uses' => 'AddController@index']);
    // danh sách đơn hàng chưa được xử lý
    Route::get('yet', ['as' => 'yet', 'uses' => 'YetController@index']);
    // danh sách đơn hàng huỷ
    Route::get('cancel', ['as' => 'cancel', 'uses' => 'CancelController@index']);

    // thao tác trên dữ liệu
    // đơn hàng đang xử lý
    Route::get('processing/{order_id}', ['as' => 'processing::order', 'uses' => 'ProcessingController@processing']);
    // xử lý hóa đơn chuyển sang hủy order: status:3
    Route::get('cancel/order/{order_id}', ['as' => 'cancel::order', 'uses' => 'CancelController@cancel']);

    // xử lý đơn hàng thành công, khi NCC ko thực hiện được thao tác xác nhận đơn hàng, thì admin sẽ update thay
    Route::get('success/{order_id}', ['as' => 'success::order', 'uses' => 'ProcessController@success']);
    Route::get('notprocess/{order_id}', ['as' => 'notprocess::order', 'uses' => 'YetController@yet']);

    // mẫu hóa đơn, dùng để in
    Route::get('print/{order_id}', ['as' => 'print', 'uses' => 'PrintOrderController@index']);

    // xem chi tiết hóa đơn
    Route::get('view/{order_id}', ['as' => 'view::order', 'uses' => 'PrintOrderController@show']);

});
