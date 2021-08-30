<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class formacionacademica extends Model
{
    public $table = "RHT_formacionacademica";
    protected $fillable = ['periodo','nombre', 'gradoEstudios', 'situacion', 'cedula', 'fechaTitulacion', 'rutaCedula', 'rutaCertificado', 'rutaTitulo', 'personal'];

    public function complementoPersonal()
    {
        return $this->belongsTo('App\ComplementoPersonal');
    }

}
