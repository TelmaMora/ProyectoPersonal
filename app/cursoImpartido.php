<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class cursoImpartido extends Model
{
     public $table = "RHT_cursoImpartido";
    protected $fillable = ['año' ,'nombre', 'modalidad', 'duraciónHrs', 'constancia','personal'];

    public function complementoPersonal()
    {
        return $this->belongsTo('App\ComplementoPersonal');
    }
}
