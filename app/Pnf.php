<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pnf extends Model
{
    protected $table='pnf';
    protected $fillable= ['id','codigo'];

    public function pnf(){
        return $this->HasMany('App/Carreras','id_pnf','id');
    }
}
