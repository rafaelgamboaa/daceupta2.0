<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquias extends Model
{
    protected $table='parroquias';
    protected $fillable= ['id','parroquias','id_municipio'];

    public function municipio(){
        return $this->BelognsTo('App/Municipios','id_municipio','id');
    }
}


