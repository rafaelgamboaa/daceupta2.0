<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table='departamentos';
    protected $fillable= ['id','codigo','departamento','status'];

    public function carrera(){
        return $this->HasMany('App/Carreras','id_departamento','id');
    }
}
