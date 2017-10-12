<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopProductTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_product_translations', function (Blueprint $table) {
            $table->increments('trans_id');

            // 2 trường cần dịch
            $table->string('title');
            $table->text('description');

            // khóa ngoại đến post
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')->on('shop_products')->onDelete('cascade');

            //ngôn ngữ
            $table->integer('lang_id')->unsigned();
            $table->foreign('lang_id')->references('lang_id')->on('languages')->onDelete('cascade');

            // 2 trường cần dịch
            $table->mediumText('meta_description')->nullable();
            $table->mediumText('meta_keyword')->nullable();
            
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
        Schema::dropIfExists('shop_product_translations');
    }
}
