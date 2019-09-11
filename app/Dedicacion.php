<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dedicacion extends Model
{
    protected $table='dedicacion';
    protected $fillable= ['id','dedicacion','status'];
}
