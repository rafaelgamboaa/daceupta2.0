<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal_has_asignatura extends Model
{
    protected $table='personal_has_asignatura';
    protected $fillable= ['id','id_docente','id_materias','id_sede','id_turno','id_seccion','id_periodo','carga_docente','status'];

    public function docente(){
        return $this->BelongsTo('App\Datosbasicos_docente','id_docente','id');
    }

    public function materia(){
        return $this->BelongsTo('App\Materias','id_materias','id');
    }

    public function sede(){
        return $this->BelongsTo('App\Sede','id_sede','id');
    }

    public function turno(){
        return $this->BelongsTo('App\Turnos','id_turno','id');
    }

    public function seccion(){
        return $this->BelongsTo('App\Secciones','id_seccion','id');
    }

    public function periodo(){
        return $this->BelongsTo('App\Periodos','id_periodo','id');
    }

}
