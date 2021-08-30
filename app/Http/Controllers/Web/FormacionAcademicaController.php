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
use DB;
use app\plaza;
use app\habilidad;
use app\formacionacademica;
use app\experienciaProfesional;
use app\cursoTomado;
use app\cursoImpartido;
use app\investigacion;

class FormacionAcademicaController extends Controller
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
        return view('curriculum.formacionacademica.add');
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
            'periodo' =>  'required',
            'nombre' => 'required',
            'gradoEstudios' =>'required',
            'situacion'    => 'required',
            'cedula'    => 'required',
            'fechaTitulacion'    => 'required',
            'rutaCedula'    => 'mimes:pdf|required',  
            'rutaCertificado'    => 'mimes:pdf|required',
            'rutaTitulo'    => 'mimes:pdf|required',
            'personal'    => 'numeric|required'       
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
       
        $file = input::file('rutaCertificado');
        $destinoPath = public_path().'/imagenes';
        $url_certificado = "certificado".rand().$tarjeta.'.'.$file->getClientOriginalExtension();
        $subir = $file ->move($destinoPath,$url_certificado);
       
        $file2 = input::file('rutaTitulo');
        $destinoPath2 = public_path().'/imagenes';
        $url_titulo = "titulo".rand().$tarjeta.'.'.$file->getClientOriginalExtension();
        $subir2 = $file2 ->move($destinoPath2,$url_titulo);

        $file3 = input::file('rutaCedula');
        $destinoPath3 = public_path().'/imagenes';
        $url_cedula = "cedula".rand().$tarjeta.'.'.$file->getClientOriginalExtension();
        $subir3 = $file3 ->move($destinoPath3,$url_cedula);
       

        $formacionacademica=formacionacademica::create([
            'periodo' => $request['periodo'],
            'nombre' => $request['nombre'],
            'gradoEstudios' => $request['gradoEstudios'],
            'situacion' => $request['situacion'],
            'cedula' => $request['cedula'],
            'fechaTitulacion' => $request['fechaTitulacion'],
            'rutaCedula' => $url_cedula,
            'rutaCertificado' => $url_certificado,
            'rutaTitulo' => $url_titulo,
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
        return view('curriculum.formacionacademica.add',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(formacionacademica $formacionacademica)
    {
        return view('curriculum.formacionacademica.edit', compact('formacionacademica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formacionacademica $formacionacademica)
    {
        $id_p= $formacionacademica->personal;
        $tarjeta=complementoPersonal::where('id', '=', $id_p)->value('personal');

        DB::table('rht_formacionacademica')->update([
            'periodo' => $request['periodo'],
            'nombre' => $request['nombre'],
            'gradoEstudios' => $request['gradoEstudios'],
            'situacion' => $request['situacion'],
            'cedula' => $request['cedula'],
            'fechaTitulacion' => $request['fechaTitulacion'],
            'personal' => $id_p]);

        $file = input::file('rutaCertificado');
        if($file!=''){
            $destinoPath = public_path().'/imagenes';
            $url_certificado = "certificado".rand().$tarjeta.'.'.$file->getClientOriginalExtension();
            $subir = $file ->move($destinoPath,$url_certificado);
            DB::table('rht_formacionacademica')->update([
            'rutaCertificado' => $url_certificado]);
        }

        $file2 = input::file('rutaTitulo');
        if($file2!=''){
        $destinoPath2 = public_path().'/imagenes';
        $url_titulo = "titulo".rand().$tarjeta.'.'.$file->getClientOriginalExtension();
        $subir2 = $file2 ->move($destinoPath2,$url_titulo);
        DB::table('rht_formacionacademica')->update([
            'rutaTitulo' => $url_titulo]);
        }

        $file3 = input::file('rutaCedula');
       if($file3!=''){ 
        $destinoPath3 = public_path().'/imagenes';
        $url_cedula = "cedula".rand().$tarjeta.'.'.$file->getClientOriginalExtension();
        $subir3 = $file3 ->move($destinoPath3,$url_cedula);
        DB::table('rht_formacionacademica')->update([
            'rutaCedula' => $url_cedula]);
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
    public function destroy(formacionacademica $formacionacademica)
    {
        $id_p= $formacionacademica->personal;
        $formacionacademica->delete();
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
