<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table='inscripcion';
    protected $fillable= ['id','id_datosbasicos','id_seccion','id_periodo','status'];

    public function datos(){
        return $this->BelognsTo('App/DatosBasicos','id_datosbasicos','id');
    }

    public function seccion(){
        return $this->BelognsTo('App/Secciones','id_seccion','id');
    }

    public function periodo(){
        return $this->BelognsTo('App/Periodos','id_periodo','id');
    }
}
