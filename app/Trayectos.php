<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trayectos extends Model
{
    protected $table='trayectos';
    protected $fillable= ['id','trayecto','id_carreras'];

    public function Carreras(){
        return $this->BelognsTo('App/Carreras','id_carreras','id');
    }
}
