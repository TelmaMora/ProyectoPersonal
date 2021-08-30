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
use DB;
use app\cursoTomado;
use app\cursoImpartido;
use app\investigacion;

class InvestigacionController extends Controller
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
        return view('curriculum.investigacion.add');
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
        $tarjeta=complementoPersonal::where('id', '=', $id_p)->value('personal');

        $v = \Validator::make($request->all(), [
            'año' => 'numeric|required',
            'nombre' => 'required',
            'presentado' =>'required',
            'indexado'    => 'required',
            'ligaMemoria'    => 'required',
            'articulo'    => 'mimes:pdf|required',
            'personal'    => 'numeric|required'       
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $file = input::file('articulo');
        $destinoPath = public_path().'/articulos';
        $articulo ="articulo".rand().$tarjeta.'.'.$file->getClientOriginalExtension();
        $subir = $file ->move($destinoPath,$articulo);


       
        $investigacion=investigacion::create([
            'año' => $request['año'],
            'nombre' => $request['nombre'],
            'presentado' => $request['presentado'],
            'indexado' => $request['indexado'],
            'ligaMemoria' => $request['ligaMemoria'],
            'articulo' => $articulo,
            'personal' => $request['personal']
        ]);
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
        return view('curriculum.investigacion.add',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(investigacion $investigacion)
    {
        return view('curriculum.investigacion.edit', compact('investigacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, investigacion $investigacion)
    {
        $id_p= $investigacion->personal;
        $tarjeta=complementoPersonal::where('id', '=', $id_p)->value('personal');


        $file = input::file('articulo');
        if($file!=''){
            $destinoPath = public_path().'/articulos';
            $articulo ="articulo".rand().$tarjeta.'.'.$file->getClientOriginalExtension();
            $subir = $file ->move($destinoPath,$articulo);
           
            DB::table('rht_investigacion')->update([
                'año' => $request['año'],
                'nombre' => $request['nombre'],
                'presentado' => $request['presentado'],
                'indexado' => $request['indexado'],
                'ligaMemoria' => $request['ligaMemoria'],
                'articulo' => $articulo,
                'personal' => $id_p
            ]);
        }
        else{
            DB::table('rht_investigacion')->update([
                'año' => $request['año'],
                'nombre' => $request['nombre'],
                'presentado' => $request['presentado'],
                'indexado' => $request['indexado'],
                'ligaMemoria' => $request['ligaMemoria'],
                'personal' => $id_p
            ]); 
        }
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
    public function destroy(investigacion $investigacion)
    {
        $id_p= $investigacion->personal;
        $investigacion->delete();
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
