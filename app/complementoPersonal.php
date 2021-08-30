<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class complementoPersonal extends Model
{
    public $table = "RHT_complementopersonal";
    protected $fillable = ['fechaNac', 'SNI', 'estadoNac', 'ciudadNac', 'estadoCivil', 'areaAdscripcion', 'funcion','gradoMaximo','personal', 'ingreso', 'contacto', 'conyugue'];

     public function personal()
    {
        return $this->belongsTo('App\rht_personal');
    }
    
    
     public function contacto()
    {
        return $this->hasOne('App\contacto');
    }

     public function conyugue()
    {
        return $this->hasOne('App\conyugue');
    }

     public function rht_ingreso()
    {
        return $this->hasOne('App\rht_ingreso');
    }
    public function hijo()
    {
        return $this->hasMany('App\hijo');
    }
    public function plaza()
    {
        return $this->hasMany('App\plaza');
    }
    public function habilidad()
    {
        return $this->hasMany('App\habilidad');
    }
    public function formacionacademica()
    {
        return $this->hasMany('App\formacionacademica');
    }
    public function experienciaProfesional()
    {
        return $this->hasMany('App\experienciaProfesional');
    }
    public function cursoTomado()
    {
        return $this->hasMany('App\cursoTomado');
    }
    public function cursoImpartido()
    {
        return $this->hasMany('App\cursoImpartido');
    }
    public function ínvestigacion()
    {
        return $this->hasMany('App\investigacion');
    }
}
