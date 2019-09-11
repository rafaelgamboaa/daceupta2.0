<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal_has_asignatura extends Model
{
    protected $table='personal_has_asignatura';
    protected $fillable= ['id','id_docente','id_materias','id_sede','id_turno','id_seccion','id_periodo','carga_docente','status'];

    public function docente(){
        return $this->BelognsTo('App/Datosbasicos_docente','id_docente','id');
    }

    public function materia(){
        return $this->BelognsTo('App/Materias','id_materias','id');
    }

    public function sede(){
        return $this->BelognsTo('App/Sede','id_sede','id');
    }

    public function turno(){
        return $this->BelognsTo('App/Turnos','id_turno','id');
    }

    public function seccion(){
        return $this->BelognsTo('App/Secciones','id_secciones','id');
    }

    public function periodo(){
        return $this->BelognsTo('App/Periodos','id_periodo','id');
    }

}
