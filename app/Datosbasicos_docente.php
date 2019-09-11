<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datosbasicos_docente extends Model
{
    protected $table='datosbasicos_docente';
    protected $fillable= ['id','nacio','cedula','nombres','apellidos','id_area','telefono','direccion','correo','id_areacon','id_dedicacion','id_carrera','status'];


    public function area(){
        return $this->BelognsTo('App/Areas','id_area','id');
    }

    public function areacon(){
        return $this->BelognsTo('App/Areas','id_areacon','id');
    }

    public function dedicacion(){
        return $this->BelognsTo('App/Dedicacion','id_dedicacion','id');
    }

    public function carrera(){
        return $this->BelognsTo('App/Carreras','id_carrera','id');
    }
}
