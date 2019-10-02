<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalHasAsignaturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_has_asignatura', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_docente')->unsigned();
            $table->unsignedBigInteger('id_materias')->unsigned();
            $table->unsignedBigInteger('id_sede')->unsigned();
            $table->unsignedBigInteger('id_turno')->unsigned();
            $table->unsignedBigInteger('id_seccion')->unsigned();
            $table->unsignedBigInteger('id_periodo')->unsigned();
            $table->enum('status',['si','no']);
            $table->foreign('id_docente')->references('id')->on('datosBasicos_docente')->onDelete('cascade');
            $table->foreign('id_materias')->references('id')->on('materias')->onDelete('cascade');
            $table->foreign('id_sede')->references('id')->on('sede')->onDelete('cascade');
            $table->foreign('id_turno')->references('id')->on('turnos')->onDelete('cascade');
            $table->foreign('id_seccion')->references('id')->on('secciones')->onDelete('cascade');
            $table->foreign('id_periodo')->references('id')->on('periodos')->onDelete('cascade');
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
        Schema::dropIfExists('personal_has_asignatura');
    }
}
