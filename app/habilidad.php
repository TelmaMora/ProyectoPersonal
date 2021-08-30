<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class habilidad extends Model
{
    public $table = "RHT_habilidad";
    protected $fillable = ['descripcion', 'personal'];

    public function complementoPersonal()
    {
        return $this->belongsTo('App\ComplementoPersonal');
    }

}
