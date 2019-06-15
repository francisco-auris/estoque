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
        Schema::create('refrigerante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->int('litragem');
            $table->string('tipo');
            $table->int('quantidade');
            $table->string('sabor');
            $table->double('valor');
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
