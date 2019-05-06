<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('path');
            $table->longText('description');
            $table->longText('content');
            $table->string('img_primary')->nullable();
            $table->longText('img_sub_list')->nullable();
            $table->longText('img_primary_mobile')->nullable();
            $table->tinyInteger('is_hot')->default(0);
            $table->tinyInteger('is_active')->default(1);
            $table->unsignedTinyInteger('level')->default(0);
            $table->integer('parent_id')->nullable();
            $table->tinyInteger('type')->default(0);
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
        Schema::dropIfExists('categories');
    }
}
