<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class cursoTomado extends Model
{
    public $table = "RHT_cursoTomado";
    protected $fillable = ['año' ,'nombre', 'modalidad', 'duraciónHrs', 'constancia','personal'];

    public function complementoPersonal()
    {
        return $this->belongsTo('App\ComplementoPersonal');
    }
}
				