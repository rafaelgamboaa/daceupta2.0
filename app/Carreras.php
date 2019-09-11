<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    protected $table='carreras';
    protected $fillable= ['id','codigo','carrera','id_departamento','id_pnf','status'];

    public function departamento(){
        return $this->belognsTo('App/Departamentos','id_departamento','id');
    }

    public function pnf(){
        return $this->belognsTo('App/Pnf','id_pnf','id');
    }
}
