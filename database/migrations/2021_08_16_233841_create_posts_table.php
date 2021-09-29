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
            $table->string('usr_name');
            $table->string('city');
            $table->string('tag_2');
            $table->string('tag_3');
            $table->string('tag_4');
            $table->string('tag_5');
            $table->string('description');
            $table->string('prix');
            $table->string('phone');
            $table->string('email');
            $table->string('type');
            $table->integer('usr_id');
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
