<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('thumbnail')->default('post.png');
            $table->mediumText('meta_description')->nullable();
            $table->mediumText('meta_keyword')->nullable();
            $table->tinyInteger('status')->default(1); // 1 là đc hiển thị trong shop, 0 thì ko đc, 2 thì hiển thị ra trang chủ blog
            // khóa ngoại với bảng category, mặc định 0 là ko thuộc cate nào, tổng hợp
            $table->integer('cate_id')->unsigned()->default(0);
            $table->foreign('cate_id')->references('cate_id')->on('blog_categories')->onDelete('cascade');
            // khóa ngoài với user
            $table->integer('user_id')->unsigned()->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('blog_posts');
    }
}
