<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class experienciaProfesional extends Model
{
    public $table = "RHT_experienciaProfesional";
    protected $fillable = ['periodo' ,'puesto', 'empresa', 'personal'];

    public function complementoPersonal()
    {
        return $this->belongsTo('App\ComplementoPersonal');
    }
}
