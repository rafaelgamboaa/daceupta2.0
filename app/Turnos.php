<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turnos extends Model
{
    protected $table='turnos';
    protected $fillable= ['id','turnos','status'];
}
