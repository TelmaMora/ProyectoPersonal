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

class HijosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal=rht_personal::all();
        $ingresos=rht_ingreso::all();
        $contactos=contacto::all();
        $conyugues=conyugue::all();
        $complementoPersonal=complementoPersonal::all();
        $hijos=hijo::all();
        return view('complementoPersonal.index',compact('contactos','ingresos','conyugues','personal','complementoPersonal','hijos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('complementoPersonal.hijo.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal= $request->input('personal');
        $v = \Validator::make($request->all(), [
            'nombre' => 'required',
            'apellidoP' => 'required',
            'apellidoM' =>'required',
            'telefono'    => 'numeric|required',
            'fechaNac'    => 'required',
            'sexo'    => 'required',
            'personal'    => 'numeric|required'       
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        $hijo=hijo::create($request->all());
        return view('complementoPersonal.plaza.add',compact('personal'));
        //return redirect()->route('complementoPersonal.index')->with('message','SE REGISTRO CORRECTAMENTE');
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
    public function edit(hijo $hijo)
    {
        return view('complementoPersonal.hijo.edit', compact('hijo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hijo $hijo)
    {
        $hijo->update($request->all());
        return redirect()->route('ccomplementoPersonal.index')->with('message','SE MODIFICO CORRECTAMENTE');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(hijo $hijo)
    {
        $hijo->delete();
        return redirect()->route('complementoPersonal.index')->with('message','SE ELIMINO CORRECTAMENTE');
    }
}
