

@extends('admin.layouts.admin')

@section('content')


    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar | Más información
                    
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('complementoPersonal.update',$complementoPersonal->id) }}" method="post" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaNac">Fecha de Nacimiento:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="fechaNac" id="fechaNac" value="{{ $complementoPersonal->fechaNac }}" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
                    </div> 
                    @if($complementoPersonal->SNI=="Candidato")
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="SNI">SNI:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="SNI" name="SNI">
                            <option value="Candidato" selected="selected">Candidato</option>
                            <option value="Nivel I">Nivel I</option>
                            <option value="Nivel II">Nivel II</option>
                            <option value="Nivel III">Nivel III</option>
                            <option value="Nivel emérito">Nivel emérito</option>
                        </select>
                        </div>
                    </div>
                    @elseif($complementoPersonal->SNI=="Nivel I")
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="SNI">SNI:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="SNI" name="SNI">
                            <option value="Candidato">Candidato</option>
                            <option value="Nivel I" selected="selected">Nivel I</option>
                            <option value="Nivel II">Nivel II</option>
                            <option value="Nivel III">Nivel III</option>
                            <option value="Nivel emérito">Nivel emérito</option>
                        </select>
                        </div>
                    </div>
                    @elseif($complementoPersonal->SNI=="Nivel II")
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="SNI">SNI:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="SNI" name="SNI">
                            <option value="Candidato">Candidato</option>
                            <option value="Nivel I">Nivel I</option>
                            <option value="Nivel II" selected="selected">Nivel II</option>
                            <option value="Nivel III">Nivel III</option>
                            <option value="Nivel emérito">Nivel emérito</option>
                        </select>
                        </div>
                    </div>
                    @elseif($complementoPersonal->SNI=="Nivel III")
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="SNI">SNI:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="SNI" name="SNI">
                            <option value="Candidato">Candidato</option>
                            <option value="Nivel I">Nivel I</option>
                            <option value="Nivel II">Nivel II</option>
                            <option value="Nivel III" selected="selected">Nivel III</option>
                            <option value="Nivel emérito">Nivel emérito</option>
                        </select>
                        </div>
                    </div>
                    @else
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="SNI">SNI:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="SNI" name="SNI">
                            <option value="Candidato">Candidato</option>
                            <option value="Nivel I">Nivel I</option>
                            <option value="Nivel II">Nivel II</option>
                            <option value="Nivel III">Nivel III</option>
                            <option value="Nivel emérito" selected="selected">Nivel emérito</option>
                        </select>
                        </div>
                    </div>
                    @endif
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
                    @if($complementoPersonal->estadoCivil=="Soltero")
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estadoCivil">Estado Civil:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <input type="radio" name="estadoCivil" id="estadoCivil" value="Soltero" checked="checked"> Soltero (a)
                           <input type="radio" name="estadoCivil" id="estadoCivil" value="Casado"> Casado (a)
                        </div>
                    </div>
                    @else
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estadoCivil">Estado Civil:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <input type="radio" name="estadoCivil" id="estadoCivil" value="Soltero"> Soltero (a)
                           <input type="radio" name="estadoCivil" id="estadoCivil" value="Casado" checked="checked"> Casado (a)
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="areaAdscripcion">Área de adscripción:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="areaAdscripcion" id="areaAdscripcion" value="{{ $complementoPersonal->areaAdscripcion }}" class="form-control" required="required" placeholder="Area de adscripcion">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="funcion">Función:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="textarea" name="funcion" id="funcion" value="{{$complementoPersonal->funcion}}" class="form-control" required="required" placeholder="Funcion">
                        </div>   
                    </div>

                    @if($complementoPersonal->gradoMaximo=="Primaria")
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gradoMaximo">Grado Maximo de estudios:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="gradoMaximo" name="gradoMaximo">
                            <option value="Primaria" selected="selected">Primaria</option>
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
                    @elseif($complementoPersonal->gradoMaximo=="Secundaria")
                    <div class="form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gradoMaximo">Grado Maximo de estudios:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="gradoMaximo" name="gradoMaximo">
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria"selected="selected">Secundaria</option>
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
                    @elseif($complementoPersonal->gradoMaximo=="Bachillerato")
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gradoMaximo">Grado Maximo de estudios:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="gradoMaximo" name="gradoMaximo">
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="Bachillerato" selected="selected">Bachillerato</option>
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
                    @elseif($complementoPersonal->gradoMaximo=="Tecnico")
                    <div class="form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gradoMaximo">Grado Maximo de estudios:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="gradoMaximo" name="gradoMaximo">
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="Bachillerato">Bachillerato</option>
                            <option value="Tecnico" selected="selected">Tecnico</option>
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
                    @elseif($complementoPersonal->gradoMaximo=="Licenciatura")
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gradoMaximo">Grado Maximo de estudios:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="gradoMaximo" name="gradoMaximo">
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="Bachillerato">Bachillerato</option>
                            <option value="Tecnico">Tecnico</option>
                            <option value="Licenciatura" selected="selected">Licenciatura</option>
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
                    @elseif($complementoPersonal->gradoMaximo=="Especialidad")
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gradoMaximo">Grado Maximo de estudios:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="gradoMaximo" name="gradoMaximo">
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="Bachillerato">Bachillerato</option>
                            <option value="Tecnico">Tecnico</option>
                            <option value="Licenciatura">Licenciatura</option>
                            <option value="Especialidad" selected="selected">Especialidad</option>
                            <option value="Mtria con grado">Mtria con grado</option>
                            <option value="Mtria sin grado">Mtria sin grado</option>
                            <option value="Dr con grado">Dr con grado</option>
                            <option value="Dr sin grado">Dr sin grado</option>
                            <option value="Discapacidad">Con Discapacidad</option>
                            <option value="Otro">Otro</option>
                        </select>
                        </div>
                    </div>
                    @elseif($complementoPersonal->gradoMaximo=="Mtria con grado")
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
                            <option value="Mtria con grado" selected="selected">Mtria con grado</option>
                            <option value="Mtria sin grado">Mtria sin grado</option>
                            <option value="Dr con grado">Dr con grado</option>
                            <option value="Dr sin grado">Dr sin grado</option>
                            <option value="Discapacidad">Con Discapacidad</option>
                            <option value="Otro">Otro</option>
                        </select>
                        </div>
                    </div>
                    @elseif($complementoPersonal->gradoMaximo=="Mtria sin grado")
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
                            <option value="Mtria sin grado" selected="selected">Mtria sin grado</option>
                            <option value="Dr con grado">Dr con grado</option>
                            <option value="Dr sin grado">Dr sin grado</option>
                            <option value="Discapacidad">Con Discapacidad</option>
                            <option value="Otro">Otro</option>
                        </select>
                        </div>
                    </div>
                    @elseif($complementoPersonal->gradoMaximo=="Dr con grado")
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
                            <option value="Dr con grado" selected="selected">Dr con grado</option>
                            <option value="Dr sin grado">Dr sin grado</option>
                            <option value="Discapacidad">Con Discapacidad</option>
                            <option value="Otro">Otro</option>

                        </select>
                        </div>
                    </div>
                    @elseif($complementoPersonal->gradoMaximo=="Dr sin grado")
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
                            <option value="Dr sin grado" selected="selected">Dr sin grado</option>
                            <option value="Discapacidad">Con Discapacidad</option>
                            <option value="Otro">Otro</option>

                        </select>
                        </div>
                    </div>
                    @elseif($complementoPersonal->gradoMaximo=="Discapacidad")
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
                            <option value="Discapacidad" selected="selected">Con Discapacidad</option>
                            <option value="Otro">Otro</option>

                        </select>
                        </div>
                    </div>
                    @else
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
                            <option value="Dr con grado">Dr con grado</option>
                            <option value="Otro" selected="selected">Otro</option>
                        </select>
                        </div>
                    </div>
                    @endif


                    @csrf
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Guardar</button>
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
