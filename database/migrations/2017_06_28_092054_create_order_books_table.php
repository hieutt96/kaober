<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_books', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('title');
            // sẽ tự động quét thông tin của khách hàng nếu họ đang đăng nhập, sau khi đặt xong thì sẽ có trên hệ thống, và họ có thể mau, gửi mail khi có hàng kèm link mua
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('username')->nullable(); 
            $table->tinyInteger('status')->default(0); 
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
        Schema::dropIfExists('order_books');
    }
}
