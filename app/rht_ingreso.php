<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class rht_ingreso extends Model
{
	public $table = "rth_ingreso";
    protected $fillable = ['finicioGob', 'finicioSep', 'finicioPlantel', 'RAMA', 'tipo','funcion'];

    public function complementoPersonal()
    {
        return $this->belongsTo('App\complementoPersonal');
    }
}
