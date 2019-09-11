<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $table='estados';
    protected $fillable= ['id','estado'];

    public function municipio(){
        return $this->HasMany('App/Municipios','id_estado','id');
    }

    public function ciudad(){
        return $this->HasMany('App/Ciudades','id_estado','id');
    }
}
