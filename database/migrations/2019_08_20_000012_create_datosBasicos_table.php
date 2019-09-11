<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedatosBasicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosBasicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('nacio');
            $table->integer('cedula');
            $table->string('pais_n');
            $table->enum('genero',['m','f','o']);
            $table->date('fecha_nac');
            $table->integer('id_municipio_nac')->unsigned();
            $table->enum('edo_civil',['soltero (a)','casado (a)','viudo (a)','Concubinato']);
            $table->integer('telefono');
            $table->string('direccion');
            $table->text('discapacidad');
            $table->date('fecha_gradu');
            $table->integer('id_parroquia')->unsigned();
            $table->string('etnia');
            $table->integer('id_ciudad')->unsigned();
            $table->string('titulo_ob');
            $table->integer('zona_postal');
            $table->foreign('id_municipio_nac')->references('id')->on('municipios')->onDelete('cascade');
            $table->foreign('id_parroquia')->references('id')->on('parroquias')->onDelete('cascade');
            $table->foreign('id_ciudad')->references('id')->on('ciudades')->onDelete('cascade');
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
        Schema::dropIfExists('estudiantes');
    }
}
