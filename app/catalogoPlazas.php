<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class catalogoPlazas extends Model
{
    public $table = "rht_catalogoplaza";
    protected $fillable = ['UNI', 'CATEGORÍA', 'HORAS'];

}


