<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class investigacion extends Model
{
    public $table = "RHT_investigacion";
    protected $fillable = ['año' ,'nombre', 'presentado', 'indexado', 'ligaMemoria','articulo','personal'];

    public function complementoPersonal()
    {
        return $this->belongsTo('App\ComplementoPersonal');
    }
}
