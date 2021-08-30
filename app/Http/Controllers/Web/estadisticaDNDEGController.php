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
use Illuminate\Support\Facades\App;
use DB;
use DateTime;

class estadisticaDNDEGController extends Controller
{
   
    
    function separarGenero($sexo){
        if($sexo=='M'){
            $M=$M+1;
        }else{
            $H=$H+1;
        }
    }

    function separarRango($edad){

    }
    public function index()
    {
        $r1=0;
        $r2=0;
        $r3=0;
        $r4=0;
        $r5=0;
        $r6=0;
        $r7=0;
        $r8=0;
        $r9=0;
        $r10=0;
        $r11=0;
        $r1ND=0;
        $r2ND=0;
        $r3ND=0;
        $r4ND=0;
        $r5ND=0;
        $r6ND=0;
        $r7ND=0;
        $r8ND=0;
        $r9ND=0;
        $r10ND=0;
        $r11ND=0;
        $totND=0;
        $totD=0;

        $r1m=0;
        $r2m=0;
        $r3m=0;
        $r4m=0;
        $r5m=0;
        $r6m=0;
        $r7m=0;
        $r8m=0;
        $r9m=0;
        $r10m=0;
        $r11m=0;
        $r1NDm=0;
        $r2NDm=0;
        $r3NDm=0;
        $r4NDm=0;
        $r5NDm=0;
        $r6NDm=0;
        $r7NDm=0;
        $r8NDm=0;
        $r9NDm=0;
        $r10NDm=0;
        $r11NDm=0;
        $totNDm=0;
        $totDm=0;
        
    	$personal=DB::table("rht_personal")->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")->select("rht_personal.sexo", "rht_complementopersonal.fechaNac", "rth_ingreso.tipo")->where("rht_personal.sexo", "=", "H")->get();
        $personalm=DB::table("rht_personal")->join("rht_complementopersonal", "rht_complementopersonal.personal", "=", "rht_personal.id")->join("rth_ingreso","rth_ingreso.id","=","rht_complementopersonal.ingreso")->select("rht_personal.sexo", "rht_complementopersonal.fechaNac", "rth_ingreso.tipo")->where("rht_personal.sexo", "=", "M")->get();

        foreach ($personal as $persona) {
            $nacimiento = new DateTime($persona->fechaNac);
            $ahora = new DateTime(date("Y-m-d"));
            $edad = $ahora->diff($nacimiento);
            $años=$edad->format("%y");
            if ($años<20 && $persona->tipo=="Docente") {
                $r1=$r1+1;
            }else{
                
                if ($años<=20 && $persona->tipo=="No Docente") {
                    $r1ND=$r1ND+1;

                }else{
                    if ($años>=20&&$años<=24 && $persona->tipo=="Docente") {
                        $r2=$r2+1;
                    } else{
                        if ($años>=20&&$años<=24 && $persona->tipo=="No Docente") {
                            $r2ND=$r2ND+1;
                        }else{
                            if ($años>=25&&$años<=29 && $persona->tipo=="Docente") {
                                $r3=$r3+1;
                            }else{
                                if($años>=25&&$años<=29 && $persona->tipo=="No Docente"){
                                    $r3ND=$r3ND+1;
                                }else{
                                    if ($años>=30&&$años<=34 && $persona->tipo=="Docente") {
                                        $r4=$r4+1;
                                    }else{
                                        if($años>=30&&$años<=34 && $persona->tipo=="No Docente"){
                                            $r4ND=$r4ND+1;
                                        }else{
                                            if ($años>=35&&$años<=39 && $persona->tipo=="Docente") {
                                                $r5=$r5+1;
                                            }else{
                                                if($años>=35&&$años<=39 && $persona->tipo=="No Docente"){
                                                    $r5ND=$r5ND+1;
                                                }else{
                                                    if ($años>=40&&$años<=44 && $persona->tipo=="Docente") {
                                                        $r6=$r6+1;
                                                    }else{
                                                        if($años>=40&&$años<=44 && $persona->tipo=="No Docente"){
                                                            $r6ND=$r6ND+1;
                                                        }else{
                                                            if ($años>=45&&$años<=49 && $persona->tipo=="Docente") {
                                                                $r7=$r7+1;
                                                            }else{
                                                                if($años>=45&&$años<=49 && $persona->tipo=="No Docente"){
                                                                    $r7ND=$r7ND+1;
                                                                }else{
                                                                    if ($años>=50&&$años<=54 && $persona->tipo=="Docente") {
                                                                        $r8=$r8+1;
                                                                    }else{
                                                                        if($años>=50&&$años<=54 && $persona->tipo=="No Docente"){
                                                                            $r8ND=$r8ND+1;
                                                                        }else{
                                                                            if ($años>=55&&$años<=59 && $persona->tipo=="Docente") {
                                                                                $r9=$r9+1;
                                                                            }else{
                                                                                if($años>=55&&$años<=59 && $persona->tipo=="No Docente"){
                                                                                    $r9ND=$r9ND+1;
                                                                                }else{
                                                                                    if ($años>=60&&$años<=64 && $persona->tipo=="Docente") {
                                                                                        $r10=$r10+1;
                                                                                    }else{
                                                                                        if ($años>=60&&$años<=64 && $persona->tipo=="No Docente") {
                                                                                            $r10ND=$r10ND+1;
                                                                                        }else{
                                                                                            if ($años>=65 && $persona->tipo=="Docente") {
                                                                                                $r11=$r11+1;
                                                                                            }else{
                                                                                                if ($años>=65 && $persona->tipo=="No Docente"){
                                                                                                    $r11ND=$r11ND+1;
                                                                                                } 
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }

                                        }
                                    }

                                }
                            }
                        }
                    }
                }
            }
            if($persona->tipo=="Docente"){
                $totD=$totD+1;
            }else{
                $totND=$totND+1;
            }
        }
                foreach ($personalm as $persona) {
            $nacimiento = new DateTime($persona->fechaNac);
            $ahora = new DateTime(date("Y-m-d"));
            $edad = $ahora->diff($nacimiento);
            $años=$edad->format("%y");
            if ($años<20 && $persona->tipo=="Docente") {
                $r1m=$r1m+1;
            }else{
                if ($años<=20 && $persona->tipo=="No Docente") {
                    $r1NDm=$r1NDm+1;
                }else{
                    if ($años>20&&$años<=24 && $persona->tipo=="Docente") {
                        $r2m=$r2m+1;
                    } else{
                        if ($años>20&&$años<=24 && $persona->tipo=="No Docente") {
                            $r2NDm=$r2NDm+1;
                        }else{
                            if ($años>25&&$años<=29 && $persona->tipo=="Docente") {
                                $r3m=$r3m+1;
                            }else{
                                if($años>25&&$años<=29 && $persona->tipo=="No Docente"){
                                    $r3NDm=$r3NDm+1;
                                }else{
                                    if ($años>30&&$años<=34 && $persona->tipo=="Docente") {
                                        $r4m=$r4m+1;
                                    }else{
                                        if($años>30&&$años<=34 && $persona->tipo=="No Docente"){
                                            $r4NDm=$r4NDm+1;
                                        }else{
                                            if ($años>35&&$años<=39 && $persona->tipo=="Docente") {
                                                $r5m=$r5m+1;
                                            }else{
                                                if($años>35&&$años<=39 && $persona->tipo=="No Docente"){
                                                    $r5NDm=$r5NDm+1;
                                                }else{
                                                    if ($años>40&&$años<=44 && $persona->tipo=="Docente") {
                                                        $r6m=$r6m+1;
                                                    }else{
                                                        if($años>40&&$años<=44 && $persona->tipo=="No Docente"){
                                                            $r6NDm=$r6NDm+1;
                                                        }else{
                                                            if ($años>45&&$años<=49 && $persona->tipo=="Docente") {
                                                                $r7m=$r7m+1;
                                                            }else{
                                                                if($años>45&&$años<=49 && $persona->tipo=="No Docente"){
                                                                    $r7NDm=$r7NDm+1;
                                                                }else{
                                                                    if ($años>50&&$años<=54 && $persona->tipo=="Docente") {
                                                                        $r8m=$r8m+1;
                                                                    }else{
                                                                        if($años>50&&$años<=54 && $persona->tipo=="No Docente"){
                                                                            $r8NDm=$r8NDm+1;
                                                                        }else{
                                                                            if ($años>55&&$años<=59 && $persona->tipo=="Docente") {
                                                                                $r9m=$r9m+1;
                                                                            }else{
                                                                                if($años>55&&$años<=59 && $persona->tipo=="No Docente"){
                                                                                    $r9NDm=$r9NDm+1;
                                                                                }else{
                                                                                    if ($años>60&&$años<=64 && $persona->tipo=="Docente") {
                                                                                        $r10m=$r10m+1;
                                                                                    }else{
                                                                                        if ($años>60&&$años<=64 && $persona->tipo=="No Docente") {
                                                                                            $r10NDm=$r10NDm+1;
                                                                                        }else{
                                                                                            if ($años>=65 && $persona->tipo=="Docente") {
                                                                                                $r11m=$r11m+1;
                                                                                            }else{
                                                                                                if ($años>=65 && $persona->tipo=="No Docente"){
                                                                                                    $r11NDm=$r11NDm+1;
                                                                                                } 
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }

                                        }
                                    }

                                }
                            }
                        }
                    }
                }
            }
            if($persona->tipo=="Docente"){
                $totDm=$totDm+1;
            }else{
                $totNDm=$totNDm+1;
            }
        }

    $dompdf = App::make("dompdf.wrapper");
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->loadView("estadisticas.estadisticadoc.index",compact('r1','r2','r3','r4','r5','r6','r7','r8','r9','r10','r11','r1ND','r2ND','r3ND','r4ND','r5ND','r6ND','r7ND','r8ND','r9ND','r10ND','r11ND','totND','totD','r1m','r2m','r3m','r4m','r5m','r6m','r7m','r8m','r9m','r10m','r11m','r1NDm','r2NDm','r3NDm','r4NDm','r5NDm','r6NDm','r7NDm','r8NDm','r9NDm','r10NDm','r11NDm','totNDm','totDm'));
    return $dompdf->stream();
    }

    
}
