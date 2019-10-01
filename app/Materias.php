<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    protected $table='materias';
    protected $fillable= ['id','codigo','materia','unidad_c','num_fases','malla','id_trayecto','status'];
}
