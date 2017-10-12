<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            // mã hóa: bcrypt
            $table->string('password');
            $table->string('phone')->nullable()->default(null);
            $table->string('avatar')->default('avatar.png');
            // level : 0-> người dùng, level 1: admin, level 2: nhà cung cấp
            $table->tinyInteger('level')->default(0); 
            $table->tinyInteger('status')->default(0); // mặc định là chưa kích hoạt, nếu chưa gửi mã xác nhận qua phone hoặc mail
            $table->text('address')->nullable()->default(null);
            //câu nói yêu thích
            $table->text('slogan')->nullable()->default(null);
            // nhận xét về bản thân
            $table->text('about')->nullable()->default(null);
            // số thẻ ngân hàng
            $table->string('cardnumber')->nullable()->default(null);
            //mã thẻ ngân hàng
            $table->string('cardkey')->nullable()->default(null);
            // ngày sinh 
            $table->string('birthday')->nullable()->default(null);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
