<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class plaza extends Model
{
    public $table = "rht_plaza";
    protected $fillable = ['descripcion','UNI', 'categoria', 'tipoMov', 'Diagonal', 'horas', 'horasNombramiento', 'personal'];

    public function complementoPersonal()
    {
        return $this->belongsTo('App\ComplementoPersonal');
    }
}
