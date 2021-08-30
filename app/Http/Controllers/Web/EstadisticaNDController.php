<?php

namespace app\Http\Controllers\Web;


use app\Http\Controllers\Controller;
use app\Http\Requests\RoleRequest;
use app\Http\Requests\UserCreateRequest;
use app\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Nahid\Permit\Facades\Permit;
use app\contacto;
use app\complementoPersonal;
use app\rht_ingreso;
use app\conyugue;
use app\rht_personal;
use app\hijo;
use app\plaza;
use app\habilidad;
use app\formacionacademica;
use app\experienciaProfesional;
use app\cursoTomado;
use app\cursoImpartido;
use app\investigacion;
use DB;
use Illuminate\Support\Facades\App;

class EstadisticaNDController extends Controller
{
    public function index()
    {
    	
        $ppt=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=","Primaria"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pph=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Primaria"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ppm=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Primaria"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $p1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Primaria"],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $p2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Primaria"],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $p3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Primaria"],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $p4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Primaria"],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $p5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Primaria"],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $p6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Primaria"],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $p7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Primaria"],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $p8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Primaria"],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $p9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Primaria"],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $p10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Primaria"],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();



        $pst=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=","Secundaria"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $psh=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Secundaria"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $psm=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Secundaria"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ps1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Secundaria"],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ps2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Secundaria"],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ps3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Secundaria"],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ps4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Secundaria"],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ps5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Secundaria"],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ps6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Secundaria"],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ps7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Secundaria"],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ps8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Secundaria"],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ps9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=","Secundaria"],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ps10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=","Secundaria"],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        


        $pbt=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=",'Bachillerato']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pbh=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pbm=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pb1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pb2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pb3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pb4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pb5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pb6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pb7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pb8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pb9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pb10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Bachillerato'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();



        $ptt=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=",'Tecnico']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pth=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Tecnico']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $ptm=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Tecnico']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pt1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Tecnico'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pt2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Tecnico'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pt3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Tecnico'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pt4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Tecnico'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pt5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Tecnico'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pt6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Tecnico'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pt7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Tecnico'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pt8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Tecnico'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pt9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Tecnico'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pt10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Tecnico'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();



        $plt=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=",'Licenciatura']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $plh=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $plm=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pl1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pl2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pl3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pl4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pl5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pl6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pl7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pl8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pl9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pl10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Licenciatura'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();


        $pet=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=",'Especialidad']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $peh=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Especialidad']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pem=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Especialidad']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pe1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Especialidad'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pe2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Especialidad'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pe3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Especialidad'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pe4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Especialidad'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pe5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Especialidad'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pe6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Especialidad'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pe7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Especialidad'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pe8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Especialidad'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pe9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Especialidad'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pe10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Especialidad'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();


        $pmgt=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=",'Mtria con grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmgh=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmgm=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmg1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmg2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmg3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmg4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmg5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmg6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmg7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmg8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmg9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmg10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria con grado'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();


        $pmt=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmh=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pmm=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pm1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pm2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pm3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pm4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pm5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pm6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pm7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pm8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pm9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pm10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Mtria sin grado'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        




        $pdrgt=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=",'Dr con grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrgh=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrgm=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrg1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrg2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrg3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrg4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrg5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrg6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrg7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrg8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrg9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrg10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr con grado'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();


        $pdrt=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=",'Dr sin grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrh=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdrm=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdr1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdr2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdr3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdr4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdr5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdr6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdr7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdr8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdr9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdr10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Dr sin grado'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();




        $pdt=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=",'Discapacidad']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdh=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pdm=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pd1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pd2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pd3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pd4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pd5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pd6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pd7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pd8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pd9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pd10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Discapacidad'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();



        $pot=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([["rht_complementopersonal.gradoMaximo","=",'Otro']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $poh=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Otro']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $pom=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Otro']])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $po1=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Otro'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $po2=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Otro'],["rth_ingreso.funcion","=","Servicios"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $po3=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Otro'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $po4=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Otro'],["rth_ingreso.funcion","=","Administrativas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $po5=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Otro'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $po6=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Otro'],["rth_ingreso.funcion","=","Analistas"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $po7=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Otro'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $po8=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Otro'],["rth_ingreso.funcion","=","Docencia"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $po9=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','H'],["rht_complementopersonal.gradoMaximo","=",'Otro'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();
        $po10=DB::table("rht_personal")
        ->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")
        ->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")
        ->select('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->where([['rht_personal.sexo','=','M'],["rht_complementopersonal.gradoMaximo","=",'Otro'],["rth_ingreso.funcion","=","Con discapacidad"]])->groupBy('rht_personal.sexo', 'rht_complementopersonal.gradoMaximo','rth_ingreso.funcion')
        ->get();

        $t1=count($p1)+count($ps1)+count($pb1)+count($pt1)+count($pl1)+count($pe1)+count($pmg1)+count($pdrg1)+count($pd1)+count($po1);
        $t2=count($p2)+count($ps2)+count($pb2)+count($pt2)+count($pl2)+count($pe2)+count($pmg2)+count($pdrg2)+count($pd2)+count($po2);
        $t3=count($p3)+count($ps3)+count($pb3)+count($pt3)+count($pl3)+count($pe3)+count($pmg3)+count($pdrg3)+count($pd3)+count($po3);
        $t4=count($p4)+count($ps4)+count($pb4)+count($pt4)+count($pl4)+count($pe4)+count($pmg4)+count($pdrg4)+count($pd4)+count($po4);
        $t5=count($p5)+count($ps5)+count($pb5)+count($pt5)+count($pl5)+count($pe5)+count($pmg5)+count($pdrg5)+count($pd5)+count($po5);
        $t6=count($p6)+count($ps6)+count($pb6)+count($pt6)+count($pl6)+count($pe6)+count($pmg6)+count($pdrg6)+count($pd6)+count($po6);
        $t7=count($p7)+count($ps7)+count($pb7)+count($pt7)+count($pl7)+count($pe7)+count($pmg7)+count($pdrg7)+count($pd7)+count($po7);
        $t8=count($p8)+count($ps8)+count($pb8)+count($pt8)+count($pl8)+count($pe8)+count($pmg8)+count($pdrg8)+count($pd8)+count($po8);
        $t9=count($p9)+count($ps9)+count($pb9)+count($pt9)+count($pl9)+count($pe9)+count($pmg9)+count($pdrg9)+count($pd9)+count($po9);
        $t10=count($p10)+count($ps10)+count($pb10)+count($pt10)+count($pl10)+count($pe10)+count($pmg10)+count($pdrg10)+count($pd10)+count($po10);
        $t11=count($pph)+count($psh)+count($pbh)+count($pth)+count($plh)+count($peh)+count($pmgh)+count($pdrgh)+count($pdh)+count($poh);
        $t12=count($ppm)+count($psm)+count($pbm)+count($ptm)+count($plm)+count($pem)+count($pmgm)+count($pdrgm)+count($pdm)+count($pom);
        $t13=count($ppt)+count($pst)+count($pbt)+count($ptt)+count($plt)+count($pet)+count($pmgt)+count($pdrgt)+count($pdt)+count($pot);

        //dd($funciones,$titulos);
        $dompdf = App::make("dompdf.wrapper");
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadView("estadisticas.estadisticandoc.index",compact('ppt','pph','ppm','p1','p2','p3','p4','p5','p6','p7','p8','p9','p10','pst','psh','psm','ps1','ps2','ps3','ps4','ps5','ps6','ps7','ps8','ps9','ps10','pbt','pbh','pbm','pb1','pb2','pb3','pb4','pb5','pb6','pb7','pb8','pb9','pb10','ptt','pth','ptm','pt1','pt2','pt3','pt4','pt5','pt6','pt7','pt8','pt9','pt10','plt','plh','plm','pl1','pl2','pl3','pl4','pl5','pl6','pl7','pl8','pl9','pl10','pet','peh','pem','pe1','pe2','pe3','pe4','pe5','pe6','pe7','pe8','pe9','pe10','pmgt','pmgh','pmgm','pmg1','pmg2','pmg3','pmg4','pmg5','pmg6','pmg7','pmg8','pmg9','pmg10','pdrgt','pdrgh','pdrgm','pdrg1','pdrg2','pdrg3','pdrg4','pdrg5','pdrg6','pdrg7','pdrg8','pdrg9','pdrg10','pdt','pdh','pdm','pd1','pd2','pd3','pd4','pd5','pd6','pd7','pd8','pd9','pd10','pot','poh','pom','po1','po2','po3','po4','po5','po6','po7','po8','po9','po10','t1','t2','t3','t4','t5','t6','t7','t8','t9','t10','t11','t12','t13'));
        return $dompdf->stream();
    }

    
}


//SELECT gradoMaximo, sexo, rth_ingreso.funcion from rht_personal join rht_complementopersonal on rht_personal.id=rht_complementopersonal.personal join rth_ingreso on rth_ingreso.id=rht_complementopersonal.ingreso

