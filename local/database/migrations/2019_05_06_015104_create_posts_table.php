<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->string('path');
            $table->longText('description');
            $table->longText('content');
            $table->string('img_primary')->nullable();
            $table->longText('img_sub_list')->nullable();
            $table->tinyInteger('is_hot')->default(0);
            $table->tinyInteger('is_active')->default(1);
            $table->unsignedInteger('user_id')->default(1);
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
