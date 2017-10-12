<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('permission_id');
            $table->string('name')->unique();
            $table->string('module')->nullable();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->tinyInteger('status')->default(1); // 1: quyền này có hiệu lực khi thêm
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
        Schema::dropIfExists('permissions');
    }
}
