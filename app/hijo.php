<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class hijo extends Model
{
	 public $table = "rht_hijo";
    protected $fillable = ['nombre', 'apellidoP', 'apellidoM', 'telefono', 'fechaNac', 'sexo', 'personal'];

	public function complementoPersonal()
    {
        return $this->belongsTo('App\ComplementoPersonal');
    }
}
