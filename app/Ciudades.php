<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    protected $table='ciudades';
    protected $fillable= ['id','ciudad','capital','id_estado'];

    public function estado(){
        return $this->BelongsTo('App/Estados','id_estado','id');
    }
}
