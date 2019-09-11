<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosbasicosDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosbasicos_docente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nacio');
            $table->integer('cedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('telefono');
            $table->string('direccion');
            $table->string('correo');
            $table->unsignedBigInteger('id_area')->unsigned();
            $table->unsignedBigInteger('id_dedicacion')->unsigned();
            $table->unsignedBigInteger('id_carrera')->unsigned();
            $table->enum('status',['si','no']);
            $table->foreign('id_area')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('id_dedicacion')->references('id')->on('dedicacion')->onDelete('cascade');
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
        Schema::dropIfExists('datosbasicos_docente');
    }
}
