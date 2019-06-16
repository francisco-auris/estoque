<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefrigeranteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refrigerantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca');
            $table->integer('litragem');
            $table->string('tipo');
            $table->integer('quantidade');
            $table->string('sabor');
            $table->string('valor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refrigerante');
    }
}
