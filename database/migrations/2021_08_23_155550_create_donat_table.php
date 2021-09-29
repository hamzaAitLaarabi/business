<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donat', function (Blueprint $table) {
            $table->id();
            $table->string('genre_donate');
            $table->string('des_donate');
            $table->string('image_path');
            $table->string('usr_name');           
            $table->string('phone');
            $table->string('email');
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
        Schema::dropIfExists('donat');
    }
}
