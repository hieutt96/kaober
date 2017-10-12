<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('shop_id');
            $table->string('title');
            $table->mediumText('description')->nullable()->default(null);
            $table->string('slug')->unique();
            $table->tinyInteger('status')->default(0); // mặc đinh khi tạo tài khoản sẽ tạo ra 1 shop
            $table->string('address')->nullable()->default(null); // địa chỉ shop
            $table->string('slogan')->nullable()->default(null); // khẩu hiệu của shop
            // khóa ngoài với user
            $table->integer('user_id')->unsigned()->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('thumbnail')->default('shop.png');

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
        Schema::dropIfExists('shops');
    }
}
