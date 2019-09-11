<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargaNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carga_notas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_datosBasicos')->unsigned();
            $table->unsignedBigInteger('id_materias')->unsigned();
            $table->integer('nota_final');
            $table->string('observacion');
            $table->unsignedBigInteger('id_periodo')->unsigned();
            $table->unsignedBigInteger('id_seccion')->unsigned();
            $table->unsignedBigInteger('id_turno')->unsigned();
            $table->foreign('id_datosBasicos')->references('id')->on('datosBasicos')->onDelete('cascade');
            $table->foreign('id_materias')->references('id')->on('materias')->onDelete('cascade');
            $table->foreign('id_periodo')->references('id')->on('periodos')->onDelete('cascade');
            $table->foreign('id_seccion')->references('id')->on('secciones')->onDelete('cascade');
            $table->foreign('id_turno')->references('id')->on('turnos')->onDelete('cascade');
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
        Schema::dropIfExists('carga_notas');
    }
}
