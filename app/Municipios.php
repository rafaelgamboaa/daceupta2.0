<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $table='municipios';
    protected $fillable= ['id','municipio','id_estado'];

    public function estado(){
        return $this->BelognsTo('App/Estados','id_estado','id');
    }
}
