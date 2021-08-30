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
class ExperienciaProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curriculum.experienciaProfesional.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_p= $request->input('personal');
        $v = \Validator::make($request->all(), [
            
            'periodo' =>  'required',
            'puesto' => 'required',
            'empresa' =>'required',
            'personal'    => 'numeric|required'        
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
       
        $habilidad=experienciaProfesional::create($request->all());
        $id_i=complementoPersonal::where('id', '=', $id_p)->value('ingreso');
        $id_c=complementoPersonal::where('id', '=', $id_p)->value('contacto');
        $complementoPersonal=complementoPersonal::where('id', '=', $id_p)->get();
        $personal=rht_personal::all();
        $ingresos=rht_ingreso::where('id', '=', $id_i)->get();
        $contactos=contacto::where('id', '=', $id_c)->get();
        $conyugues=conyugue::where('personal', '=', $id_p)->get();
        $hijos=hijo::where('personal', '=', $id_p)->get();
        $plazas=plaza::where('personal', '=', $id_p)->get();
        $habilidades=habilidad::where('personal','=',$id_p)->get();
        $formaciones=formacionacademica::where('personal','=',$id_p)->get();
        $experiencias=experienciaProfesional::where('personal','=',$id_p)->get();
        $cursosTomados=cursoTomado::where('personal','=',$id_p)->get();
        $cursosImpartidos=cursoImpartido::where('personal','=',$id_p)->get();
        $investigaciones=investigacion::where('personal','=',$id_p)->get();
        return view('complementoPersonal.index',compact('contactos','ingresos','conyugues','personal','complementoPersonal','hijos','plazas','id_p','habilidades','formaciones','experiencias','cursosTomados','cursosImpartidos','investigaciones'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('curriculum.experienciaProfesional.add',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(experienciaProfesional $experienciaProfesional)
    {
         return view('curriculum.experienciaProfesional.edit', compact('experienciaProfesional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, experienciaProfesional $experienciaProfesional)
    {
        $id_p= $experienciaProfesional->personal;
        $experienciaProfesional->update($request->all());
        $id_i=complementoPersonal::where('id', '=', $id_p)->value('ingreso');
        $id_c=complementoPersonal::where('id', '=', $id_p)->value('contacto');
        $complementoPersonal=complementoPersonal::where('id', '=', $id_p)->get();
        $personal=rht_personal::all();
        $ingresos=rht_ingreso::where('id', '=', $id_i)->get();
        $contactos=contacto::where('id', '=', $id_c)->get();
        $conyugues=conyugue::where('personal', '=', $id_p)->get();
        $hijos=hijo::where('personal', '=', $id_p)->get();
        $plazas=plaza::where('personal', '=', $id_p)->get();
        $habilidades=habilidad::where('personal','=',$id_p)->get();
        $formaciones=formacionacademica::where('personal','=',$id_p)->get();
        $experiencias=experienciaProfesional::where('personal','=',$id_p)->get();
        $cursosTomados=cursoTomado::where('personal','=',$id_p)->get();
        $cursosImpartidos=cursoImpartido::where('personal','=',$id_p)->get();
        $investigaciones=investigacion::where('personal','=',$id_p)->get();
        return view('complementoPersonal.index',compact('contactos','ingresos','conyugues','personal','complementoPersonal','hijos','plazas','id_p','habilidades','formaciones','experiencias','cursosTomados','cursosImpartidos','investigaciones'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(experienciaProfesional $experienciaProfesional)
    {
        $id_p= $experienciaProfesional->personal;
        $experienciaProfesional->delete();
        $id_i=complementoPersonal::where('id', '=', $id_p)->value('ingreso');
        $id_c=complementoPersonal::where('id', '=', $id_p)->value('contacto');
        $complementoPersonal=complementoPersonal::where('id', '=', $id_p)->get();
        $personal=rht_personal::all();
        $ingresos=rht_ingreso::where('id', '=', $id_i)->get();
        $contactos=contacto::where('id', '=', $id_c)->get();
        $conyugues=conyugue::where('personal', '=', $id_p)->get();
        $hijos=hijo::where('personal', '=', $id_p)->get();
        $plazas=plaza::where('personal', '=', $id_p)->get();
        $habilidades=habilidad::where('personal','=',$id_p)->get();
        $formaciones=formacionacademica::where('personal','=',$id_p)->get();
        $experiencias=experienciaProfesional::where('personal','=',$id_p)->get();
        $cursosTomados=cursoTomado::where('personal','=',$id_p)->get();
        $cursosImpartidos=cursoImpartido::where('personal','=',$id_p)->get();
        $investigaciones=investigacion::where('personal','=',$id_p)->get();
        return view('complementoPersonal.index',compact('contactos','ingresos','conyugues','personal','complementoPersonal','hijos','plazas','id_p','habilidades','formaciones','experiencias','cursosTomados','cursosImpartidos','investigaciones'));
    }
}
