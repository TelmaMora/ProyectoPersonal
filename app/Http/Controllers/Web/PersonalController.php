<?php
namespace app\Http\Controllers\Web;


use app\Http\Controllers\Controller;
use app\Http\Requests\RoleRequest;
use app\Http\Requests\UserCreateRequest;
use app\Services\User\UserService;
use Illuminate\Http\Request;
use Nahid\Permit\Facades\Permit;
use app\rht_personal;
use Illuminate\Support\Facades\Input;
use app\contacto;
use app\complementoPersonal;
use app\rht_ingreso;
use app\conyugue;
use app\hijo;
use app\plaza;
use app\habilidad;
use app\formacionacademica;
use app\experienciaProfesional;
use app\cursoTomado;
use app\cursoImpartido;
use app\investigacion;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal=rht_personal::all();
        return view('personal.index',compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_pass =  $request->input('contraseña');
        $salt = md5($user_pass);
        $pasword_encriptado = crypt($user_pass, $salt);
        $rfc=$request->input('rfc');
        $v = \Validator::make($request->all(), [
            'rfc' =>  'required',
            'curp' => 'required',
            'titulo' =>'required',
            'nombre'    => 'required',
            'apellido_paterno'    => 'required',
            'apellido_materno' => 'required',
            'correo' =>'required|email',
            'telefono'    => 'required',
            'estado'    => 'required',
            'imagen'    => 'mimes:jpeg,bmp,png,gif,svg|required',
            'sexo'    => 'required',
            'abreviatura' => 'required',
            'usuario' =>'required|email',
            'contraseña'    => 'required'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        $file = input::file('imagen');
        $destinoPath = public_path().'/fotosPerf';
        $imag = $rfc.'.'.$file->getClientOriginalExtension();
        $subir = $file ->move($destinoPath,$imag);
        $data=[
            'rfc' => $request->input('rfc'),
            'curp' => $request->input('curp'), 
            'titulo' => $request->input('titulo'), 
            'nombre' => $request->input('nombre'), 
            'apellido_paterno' => $request->input('apellido_paterno'),
            'apellido_materno' => $request->input('apellido_materno'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
            'estado' => $request->input('estado'), 
            'imagen' => $imag, 
            'sexo' => $request->input('sexo'), 
            'abreviatura' => $request->input('abreviatura'),
            'usuario' => $request->input('usuario'),
            'contraseña' => $pasword_encriptado
        ];
        $rht_personal=rht_personal::create($data);
        return view('complementoPersonal.ingreso.add',compact('rht_personal'));
        //return redirect()->route('personal.index')->with('message','SE REGISTRO CORRECTAMENTE');
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
    public function edit(rht_personal $personal)
    {
        return view('personal.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rht_personal $personal)
    {
        $file = input::file('imagen');
        $rfc=$request->input('rfc');
        if($file!=''){
            $destinoPath = public_path().'/fotosPerf';
            $imag = $rfc.'.'.$file->getClientOriginalExtension();
            $subir = $file ->move($destinoPath,$imag);
            $data=[
                'rfc' => $request->input('rfc'),
                'curp' => $request->input('curp'), 
                'titulo' => $request->input('titulo'), 
                'nombre' => $request->input('nombre'), 
                'apellido_paterno' => $request->input('apellido_paterno'),
                'apellido_materno' => $request->input('apellido_materno'),
                'correo' => $request->input('correo'),
                'telefono' => $request->input('telefono'),
                'estado' => $request->input('estado'), 
                'imagen' => $imag, 
                'sexo' => $request->input('sexo'), 
                'abreviatura' => $request->input('abreviatura')
            ];
    }else{
        $data=[
            'rfc' => $request->input('rfc'),
            'curp' => $request->input('curp'), 
            'titulo' => $request->input('titulo'), 
            'nombre' => $request->input('nombre'), 
            'apellido_paterno' => $request->input('apellido_paterno'),
            'apellido_materno' => $request->input('apellido_materno'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
            'estado' => $request->input('estado'),  
            'sexo' => $request->input('sexo'), 
            'abreviatura' => $request->input('abreviatura')
        ];
    }
        
        $personal->update($data);
        return redirect()->route('personal.index')->with('message','SE MODIFICO CORRECTAMENTE');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(rht_personal $personal)
    {
        $id_p=$personal->id;
        $id_i=complementoPersonal::where('id', '=', $id_p)->value('ingreso');
        $id_c=complementoPersonal::where('id', '=', $id_p)->value('contacto');
        $complementoPersonal=complementoPersonal::where('id', '=', $id_p)->get();
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
        foreach ($investigaciones as $investigacion ) {
            $investigacion->delete();
        }
        foreach ($cursosImpartidos as $ci) {
            $ci->delete();
        }
        foreach ($cursosTomados as $ct) {
            $ct->delete();
        }
        foreach ($experiencias as $experiencia) {
           $experiencia->delete(); 
        }
        foreach ($formaciones as $formacion) {
            $formacion->delete();
        }
        foreach ($habilidades as $habilidad) {
            $habilidad->delete();
        }
        foreach ($plazas as $plaza) {
            $plaza->delete();
        }
        foreach ($hijos as $hijo) {
            $hijo->delete();
        }
        foreach ($conyugues as $conyugue) {
            $conyugue->delete();
        }
        foreach ($complementoPersonal as $cp) {
            $cp->delete();
        }
        foreach ($contactos as $contacto) {
            $contacto->delete();
        }
        foreach ($ingresos as $ingreso) {
            $ingreso->delete();
        }
        
        $personal->delete();
        return redirect()->route('personal.index')->with('message','SE ELIMINO CORRECTAMENTE');
    }
}
