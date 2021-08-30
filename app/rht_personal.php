<?php

namespace app;

use Illuminate\Database\Eloquent\Model;



class rht_personal extends Model
{
    protected $table = 'rht_personal';
    protected $fillable=['rfc','curp','titulo','nombre','apellido_paterno','apellido_materno','correo','telefono','estado','imagen','sexo','abreviatura','usuario','contraseña'];
    
    public function complementoPersonal()
    {
        return $this->hasOne('App\complementoPersonal');
    }
}
