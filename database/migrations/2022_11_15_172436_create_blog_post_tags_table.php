<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post_tags', function (Blueprint $table) {
            $table->integer('blog_post_id')->unsigned()->index();
            $table->integer('blog_tag_id')->unsigned()->index();
            $table->foreign('blog_post_id')->references('id')->on('blog_posts')->onDelete('cascade');

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
        Schema::dropIfExists('blog_post_tags');
    }
}
