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

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresos=rht_ingreso::all();
        $contactos=contacto::all();
        return view('complementoPersonal.index',compact('contactos','ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('complementoPersonal.contacto.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingreso = $request->input('ingreso');
        $personal = $request->input('personal');
        $data=[
            'calle' => $request->input('calle'),
            'numero' => $request->input('numero'), 
            'colonia' => $request->input('colonia'), 
            'codigoPostal' => $request->input('codigoPostal'), 
            'estado' => $request->input('estado'),
            'municipio' => $request->input('municipio'),
            'celular' => $request->input('celular')
        ];
        $v = \Validator::make($request->all(), [
            
            'calle' =>  'required',
            'numero'    => 'numeric|required',
            'colonia' => 'required',
            'codigoPostal'    => 'numeric|required',
            'estado' =>'required',
            'municipio'    => 'required',
            'celular'    => 'numeric|required'        
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        $contacto=contacto::create($data);
        return view('complementoPersonal.add',compact('contacto','ingreso','personal'));
        //return redirect()->route('contacto.index')->with('message','SE REGISTRO CORRECTAMENTE');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(contacto $contacto)
    {
        return view('complementoPersonal.contacto.edit', compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contacto $contacto)
    {
        $id=$contacto->id;
        $id_p= complementoPersonal::where('contacto', '=', $id)->value('id');
        $contacto->update($request->all());
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
        //return redirect()->route('contacto.index')->with('message','SE MODIFICO CORRECTAMENTE');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(contacto $contacto)
    {
        $contacto->delete();
        return redirect()->route('contacto.index')->with('message','SE ELIMINO CORRECTAMENTE');
    }
}
