<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post_translations', function (Blueprint $table) {
            $table->increments('trans_id');

            // 2 trường cần dịch
            $table->string('title');
            $table->text('content');

            // khóa ngoại đến post
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')->references('post_id')->on('blog_posts')->onDelete('cascade');

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
        Schema::dropIfExists('blog_post_translations');
    }
}
