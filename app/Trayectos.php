<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trayectos extends Model
{
    protected $table='trayectos';
    protected $fillable= ['id','trayecto','id_carrera'];

    public function Carreras(){
        return $this->BelongsTo('App\Carreras','id_carrera','id');
    }
}
