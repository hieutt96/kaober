<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopProductRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_product_rates', function (Blueprint $table) {
            $table->increments('rate_id'); // phải đăng nhập mới đc rate
            // khóa ngoại với product
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')->on('shop_products')->onDelete('cascade');
            // khóa ngoài với user
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('rate'); // rate: 1,2,3,4,5
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_product_rates');
    }
}
