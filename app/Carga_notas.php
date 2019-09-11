<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carga_notas extends Model
{
    protected $table='carga_notas';
    protected $fillable= ['id','id_datosbasicos','id_materias','nota_final','observacion','id_periodo','id_seccion','id_turno'];

    public function datos(){
        return $this->BelognsTo('App/DatosBasicos','id_datosbasicos','id');
    }

    public function materia(){
        return $this->BelognsTo('App/Materias','id_materias','id');
    }

    public function periodo(){
        return $this->BelognsTo('App/Periodos','id_periodo','id');
    }

    public function seccion(){
        return $this->BelognsTo('App/Secciones','id_seccion','id');
    }

    public function turno(){
        return $this->BelognsTo('App/Turnos','id_turno','id');
    }

}
