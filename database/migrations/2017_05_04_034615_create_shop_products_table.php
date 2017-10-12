<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('title');
            $table->mediumText('description');
            $table->integer('price')->default(0); // đơn vị nhỏ nhất K nvđ, 0: liên hệ
            $table->string('thumbnail')->default('thumbproduct.png');
            $table->string('slug')->unique(); // nhiều sp nên sẽ phải có đuôi hash
            $table->tinyInteger('status')->default(1);// 1 là đc hiển thị trong shop, 0 thì ko đc, 2 thì hiển thị ra trang chủ blog
            // khóa ngoài với shop cate, ko thuộc cate nào
            $table->integer('cate_id')->unsigned()->default(0);
            $table->foreign('cate_id')->references('cate_id')->on('shop_categories')->onDelete('cascade');
            // khóa ngoại với shop của user
            $table->integer('shop_id')->unsigned()->default(0);
            $table->foreign('shop_id')->references('shop_id')->on('shops')->onDelete('cascade');

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
        Schema::dropIfExists('shop_products');
    }
}
