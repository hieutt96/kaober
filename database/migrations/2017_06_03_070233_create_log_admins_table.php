<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_admins', function (Blueprint $table) {
            $table->increments('log_id');
            $table->string('user_id');
            $table->string('email');
            $table->string('ip')->nullable(); // GET IP ADMIN
            $table->string('action'); // CRUD
            $table->string('description')->nullable(); // miêu tả hàng động làm
            $table->string('type')->nullable(); // tên gọi của log: bình thường, khả nghi
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
        Schema::dropIfExists('log_admins');
    }
}
