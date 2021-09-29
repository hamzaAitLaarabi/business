<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivreurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livreur', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('usr_id');
            $table->string('city');
            $table->string('a_sender');
            $table->string('a_reciver');
            $table->string('commande');
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
        Schema::dropIfExists('livreur');
    }
}
