<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
	public $table = "rht_contacto";
    protected $fillable = ['calle', 'numero', 'colonia', 'codigoPostal', 'estado', 'municipio', 'celular'];
    
     public function complementoPersonal()
    {
        return $this->belongsTo('App\complementoPersonal');
    }
}
