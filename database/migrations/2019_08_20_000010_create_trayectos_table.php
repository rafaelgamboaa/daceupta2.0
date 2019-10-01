<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrayectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trayectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('trayecto');
            $table->unsignedBigInteger('id_carrera')->unsigned();
            $table->foreign('id_carrera')->references('id')->on('carreras')->onDelete('cascade');
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
        Schema::dropIfExists('trayectos');
    }
}
