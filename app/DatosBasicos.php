<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosBasicos extends Model
{
    protected $table='datosbasicos';
    protected $fillable= ['id','nombres','apellidos','nacio','cedula','pais_n','genero','fecha_nac','id_municipio_nac','edo_civil','telefono','direccion','discapacidad','fecha_gradu','id_parroquia','etnia','id_ciudad','titulo_ob','zona_postal'];

    public function municipio(){
        return $this->BelongsTo('App/Municipios','id_municipio_nac','id');
    }

    public function parroquia(){
        return $this->BelongsTo('App/Parroquias','id_parroquia','id');
    }
    
    public function ciudades(){
        return $this->BelongsTo('App/Ciudades','id_ciudad','id');
    }

}
