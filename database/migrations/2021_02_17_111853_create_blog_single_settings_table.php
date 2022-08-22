<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogSingleSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_single_settings', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title');
            $table->string('recent_blog_title');
            $table->string('recent_blog_description');
            $table->string('categories_title');
            $table->string('recent_blogs_title');
            $table->integer('recent_post_item');
            $table->string('popular_tags_title');
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
        Schema::dropIfExists('blog_single_settings');
    }
}
