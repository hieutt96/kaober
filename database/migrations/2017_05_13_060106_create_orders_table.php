<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('keyorder')->unique(); // mã số order, mỗi order có tên khác nhau
            $table->string('name'); // tên khách hàng
            $table->string('email')->unique(); //email ko được trùng nhau
            $table->string('phone'); // cho 10 or 11 số
            $table->string('country'); // quốc gia
            $table->string('city'); //thành phố
            $table->string('district'); // quận huyện
            $table->string('address'); //địa chỉ chi tiết, số nhà, ngõ, xã
            $table->tinyInteger('status')->default(0); 
            // mặc định 0: chưa xử lý, 1: đã xử lý nhưng chưa hoàn tất đơn hàng để tạo doanh thu, 2: tính vào doanh thu

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
        Schema::dropIfExists('orders');
    }
}
