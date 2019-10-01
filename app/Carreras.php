<?php

namespace App;
use App\Departamentos;

use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    protected $table='carreras';
    protected $fillable= ['id','codigo','carrera','id_departamento','id_pnf','status'];

    public function departamento(){
        return $this->belongsTo('App\Departamentos','id_departamento','id');
    }

    public function pnf(){
        return $this->belongsTo('App\Pnf','id_pnf','id');
    }
}
