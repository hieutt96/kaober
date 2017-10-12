<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPageTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_page_translations', function (Blueprint $table) {
            $table->increments('trans_id');
            // khóa ngoài với page, bảng này dịch những cột bên page
            $table->integer('page_id')->unsigned()->default(0);
            $table->foreign('page_id')->references('page_id')->on('admin_pages')->onDelete('cascade');
            // 2 trường dịch
            $table->string('title');
            $table->text('content');

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
        Schema::dropIfExists('admin_page_translations');
    }
}
