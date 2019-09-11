<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secciones extends Model
{
    protected $table='secciones';
    protected $fillable= ['id','seccion','comentario','id_trayecto'];

    public function trayecto(){
        return $this->BelognsTo('App/Trayectos','id_trayecto','id');
    }
}
