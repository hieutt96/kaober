<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopProductValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_product_values', function (Blueprint $table) {
            $table->increments('value_id');
            // khóa ngoại với product
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')->on('shop_products')->onDelete('cascade');
            // khóa ngoại với attribute
            $table->integer('attribute_id')->unsigned();
            $table->foreign('attribute_id')->references('attribute_id')->on('shop_product_attributes')->onDelete('cascade');
            //ngôn ngữ
            $table->integer('lang_id')->unsigned();
            $table->foreign('lang_id')->references('lang_id')->on('languages')->onDelete('cascade');

            // giá trị của thuộc tính
            $table->text('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_product_values');
    }
}
