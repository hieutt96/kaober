<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopProductOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_product_orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('keyorder'); // mã số order, mỗi order có tên khác nhau
            $table->string('name'); // họ tên đầy đủ
            $table->string('email'); //email
            $table->string('phone'); // cho 10 or 11 số
            $table->string('city'); //thành phố
            $table->string('district'); // quận huyện
            $table->string('address'); //địa chỉ chi tiết, số nhà, ngõ, xã
            // khóa ngoại với product
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')->on('shop_products')->onDelete('cascade');
            $table->tinyInteger('status')->default(0); // mặc định 0: chưa xử lý, 1: đã xử lý nhưng chưa hoàn tất đơn hàng để tạo doanh thu, 2: tính vào doanh thu

            // nếu có tài khoản thì liên kết đến user, mặc định là ko có user nào tức mua hàng ko cần đăng ký
            $table->integer('user_id')->unsigned()->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_product_orders');
    }
}
