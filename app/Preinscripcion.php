<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preinscripcion extends Model
{
    protected $table='preinscripcion';
    protected $fillable= ['id','id_datosbasicos','id_seccion','id_periodo'];

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
