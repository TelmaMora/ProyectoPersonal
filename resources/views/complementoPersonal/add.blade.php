

@extends('admin.layouts.admin')

@section('content')


    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Crear nuevo | Más información
                    
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('complementoPersonal.store') }}" method="post" autocomplete="off">

                  <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="hidden" name="personal" id="personal" class="form-control" value="{{$personal}}">
                        </div>   
                </div>

                <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="hidden" name="ingreso" id="ingreso" class="form-control" value="{{$ingreso}}">
                        </div>   
                </div>

                <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="hidden" name="contacto" id="contacto" class="form-control" value="{{$contacto->id}}">
                        </div>   
                </div>

                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaNac">Fecha de Nacimiento:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="fechaNac" id="fechaNac" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="SNI">SNI:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="SNI" name="SNI">
                            <option value="Candidato">Candidato</option>
                            <option value="Nivel I">Nivel I</option>
                            <option value="Nivel II">Nivel II</option>
                            <option value="Nivel III">Nivel III</option>
                            <option value="Nivel emérito">Nivel emérito</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estadoNac">Estado de nacimiento:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select name="estadoNac" id="estadoNac"><option>Selecciona tu estado</option></select>
                        </div>   
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ciudadNac">Ciudad de nacimiento:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select name="ciudadNac" id="ciudadNac"><option>Selecciona tu ciudad</option></select>
                        </div>   
                    </div>


                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estadoCivil">Estado Civil:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <input type="radio" name="estadoCivil" id="estadoCivil" value="Soltero"> Soltero (a)
                           <input type="radio" name="estadoCivil" id="estadoCivil" value="Casado"> Casado (a)
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="areaAdscripcion">Área de adscripción:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="areaAdscripcion" id="areaAdscripcion" class="form-control" required="required" placeholder="Area de adscripcion">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="funcion">Función:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="textarea" name="funcion" id="funcion" class="form-control" required="required" placeholder="Funcion">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gradoMaximo">Grado Maximo de estudios:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="gradoMaximo" name="gradoMaximo">
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="Bachillerato">Bachillerato</option>
                            <option value="Tecnico">Tecnico</option>
                            <option value="Licenciatura">Licenciatura</option>
                            <option value="Especialidad">Especialidad</option>
                            <option value="Mtria con grado">Mtria con grado</option>
                            <option value="Mtria sin grado">Mtria sin grado</option>
                            <option value="Dr con grado">Dr con grado</option>
                            <option value="Dr sin grado">Dr sin grado</option>
                            <option value="Discapacidad">Con Discapacidad</option>
                            <option value="Otro">Otro</option>
                        </select>
                        </div>
                    </div>


                    @csrf
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Siguiente</button>
                        </div>
                    </div>


                    {{--<div class="ln_solid"></div>--}}


                </form>

                
            </div>
        </div>
    </div>


@endsection


@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
