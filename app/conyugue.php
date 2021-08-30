<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class conyugue extends Model
{
    public $table = "rht_conyugue";
    protected $fillable = ['nombre', 'apellidoP', 'apellidoM', 'telefono', 'fechaNac','personal'];

    public function complementoPersonal()
    {
        return $this->belongsTo('App\complementoPersonal');
    }
}
