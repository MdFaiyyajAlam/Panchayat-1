<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_type')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->integer('visibility')->nullable();
            $table->integer('show_right_column')->nullable();
            $table->integer('featured')->nullable()->default(0);
            $table->integer('breaking')->nullable()->default(0);
            $table->integer('slider')->nullable()->default(0);
            $table->integer('recommended')->nullable()->default(0);
            $table->integer('show_auth_user')->nullable()->default(0);
            $table->integer('send_subscriber')->nullable()->default(0);
            $table->string('tags')->nullable();
            $table->string('opt_url')->nullable();
            $table->longText('content')->nullable();
            $table->integer('post_image_gallery_id')->nullable();
            $table->string('opt_image_url')->nullable();
            $table->string('image_desc')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->integer('author_id')->nullable();
            $table->integer('status')->nullable();
            $table->string('scheduled_post_date')->nullable();
            $table->integer('view_counts')->nullable()->default(0);
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
        Schema::dropIfExists('posts');
    }
}
