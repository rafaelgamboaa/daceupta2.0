<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosBasicos extends Model
{
    protected $table='estudiantes';
    protected $fillable= ['id','nombres','apellidos','nacio','cedula','pais_n','genero','fecha_nac','id_municipio_nac','edo_civil','telefono','discapacidad','fecha_gradu','id_parroquia','etnia','id_ciudad','titulo_ob','zona_postal'];

    public function municipio(){
        return $this->BelognsTo('App/Municipios','id_municipio_nac','id');
    }

    public function parroquia(){
        return $this->BelognsTo('App/Parroquias','id_parroquia','id');
    }
    
    public function ciudades(){
        return $this->BelognsTo('App/Ciudades','id_ciudad','id');
    }

}
