@extends('admin.layouts.admin')

@section('content')
 @if(Session::has('message'))
<div class="alert alert-success">{{Session::get('message')}}</div>
 @endif

     <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>MÁS INFORMACIÓN
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                 @endif
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Fecha de nacimiento</th>
                            <th>SNI</th>
                            <th>Estado de nacimiento</th>
                            <th>Ciudad de nacimiento</th>
                            <th>Estado Civil</th>
                            <th>Área adscripción</th>
                            <th>Función</th>
                            <th>Grado Maximo de estudios</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($complementoPersonal as $persona)
                            <tr>
                                <td>{{$persona->fechaNac}}</td>
                                <td>{{$persona->SNI}}</td>
                                <td>{{$persona->estadoNac}}</td>
                                <td>{{$persona->ciudadNac}}</td>
                                <td>{{$persona->estadoCivil}}</td>
                                <td>{{$persona->areaAdscripcion}}</td>
                                <td>{{$persona->funcion}}</td>
                                <td>{{$persona->gradoMaximo}}</td>
                                <td><form action="{{ route('complementoPersonal.destroy',$persona->id) }}" method="POST">
                                    {{link_to_route('complementoPersonal.edit','Editar',[$persona->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                   
                
            </div>
        </div>
    </div>
    
<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>INFORMACIÓN DE CONTACTO
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Calle</th>
                            <th>Número</th>
                            <th>Colonia</th>
                            <th>Código Postal</th>
                            <th>Estado</th>
                            <th>Municipio</th>
                            <th>Celular</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contactos as $contacto)
                            <tr>
                                <td>{{$contacto->calle}}</td>
                                <td>{{$contacto->numero}}</td>
                                <td>{{$contacto->colonia}}</td>
                                <td>{{$contacto->codigoPostal}}</td>
                                <td>{{$contacto->estado}}</td>
                                <td>{{$contacto->municipio}}</td>
                                <td>{{$contacto->celular}}</td>
                                <td><form action="{{ route('contacto.destroy',$contacto->id) }}" method="POST">
                                    {{link_to_route('contacto.edit','Editar',[$contacto->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                   
                
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>INFORMACIÓN DE INGRESO
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Ingreso RAMA</th>
                            <th>Inicio Gobierno</th>
                            <th>Inicio SEP</th>
                            <th>Inicio Plantel</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ingresos as $ingreso)
                            <tr>
                                <td>{{$ingreso->tipo}}</td>
                                <td>{{$ingreso->RAMA}}</td>
                                <td>{{$ingreso->finicioGob}}</td>
                                <td>{{$ingreso->finicioSep}}</td>
                                <td>{{$ingreso->finicioPlantel}}</td>
                                <td><form action="{{ route('ingreso.destroy',$ingreso->id) }}" method="POST">
                                    {{link_to_route('ingreso.edit','Editar',[$ingreso->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                   
                
            </div>
        </div>
    </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>INFORMACIÓN DE PLAZAS
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="pull-right">
                        {{link_to_route('plaza.show','+',$id_p,['class'=>'btn btn-primary'])}}  
                    </div>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
               
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Categoría</th>
                            <th>Diagonal</th>
                            <th>Horas De Nombramiento</th>
                            <th>Tipo De Movimiento</th>
                        </tr>
                        </thead>
                        <tbody>                    
                        @foreach($plazas as $plaza)
                            <tr>
                                <td>{{$plaza->descripcion}}</td>
                                <td>{{$plaza->categoria}}</td>
                                <td>{{$plaza->tipoMov}}</td>
                                <td>{{$plaza->Diagonal}}</td>
                                <td>{{$plaza->horasNombramiento}}</td>
                                <td><form action="{{ route('plaza.destroy',$plaza->id) }}" method="POST">
                                    {{link_to_route('plaza.edit','Editar',[$plaza->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>CONYUGUE
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Telefono</th>
                            <th>Fecha de Nacimiento</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($conyugues as $conyugue)
                            <tr>
                                <td>{{$conyugue->nombre}}</td>
                                <td>{{$conyugue->apellidoP}}</td>
                                <td>{{$conyugue->apellidoM}}</td>
                                <td>{{$conyugue->telefono}}</td>
                                <td>{{$conyugue->fechaNac}}</td>
                                <td><form action="{{ route('conyugue.destroy',$conyugue->id) }}" method="POST">
                                    {{link_to_route('conyugue.edit','Editar',[$conyugue->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>HIJOS
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="pull-right">
                        {{link_to_route('hijo.show','+',$id_p,['class'=>'btn btn-primary'])}}  
                    </div>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                 @endif
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>                          
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Telefono</th>
                            <th>Fecha Nacimiento</th>
                            <th>Sexo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hijos as $hijo)
                            <tr>
                                <td>{{$hijo->nombre}}</td>
                                <td>{{$hijo->apellidoP}}</td>
                                <td>{{$hijo->apellidoM}}</td>
                                <td>{{$hijo->telefono}}</td>
                                <td>{{$hijo->fechaNac}}</td>
                                <td>{{$hijo->sexo}}</td>
                                <td><form action="{{ route('hijo.destroy',$hijo->id) }}" method="POST">
                                    {{link_to_route('hijo.edit','Editar',[$hijo->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>      
            </div>
        </div>
    </div>
     <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>FORMACIÓN ACADÉMICA
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="pull-right">
                        {{link_to_route('formacionacademica.show','+',$id_p,['class'=>'btn btn-primary'])}}  
                    </div>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                 @endif
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Periodo</th>
                            <th>Nombre carrera</th>
                            <th>Grado académico Abreviado</th>
                            <th>Fecha Titulación</th>
                            <th>Situación</th>
                            <th>Cédula Profesional</th>
                            <th>Imagen certificado</th>
                            <th>Imagen título</th>
                            <th>Imagen cédula</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>                   

                        @foreach($formaciones as $formacion)
                            <tr>
                                <td>{{$formacion->periodo}}</td>
                                <td>{{$formacion->nombre}}</td>
                                <td>{{$formacion->gradoEstudios}}</td>
                                <td>{{$formacion->situacion}}</td>
                                <td>{{$formacion->cedula}}</td>
                                <td>{{$formacion->fechaTitulacion}}</td>   
                                <td><a href="../imagenes/{{$formacion->rutaCertificado}}" class="btn-primary" target="_blank">
                                    <i class="fas fa-download"></i>
                                </a>
                                </td>
                                <td><a href="../imagenes/{{$formacion->rutaTitulo}}" class="btn-primary" target="_blank">
                                    <i class="fas fa-download"></i>
                                </a>
                                </td>
                                <td><a href="../imagenes/{{$formacion->rutaCedula}}" class="btn-primary" target="_blank">
                                    <i class="fas fa-download"></i>
                                </a>
                                </td>
                                <td><form action="{{ route('formacionacademica.destroy',$formacion->id) }}" method="POST">
                                    {{link_to_route('formacionacademica.edit','Editar',[$formacion->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               </td>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>EXPERIENCIA PROFESIONAL
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="pull-right">
                        {{link_to_route('experienciaProfesional.show','+',$id_p,['class'=>'btn btn-primary'])}}  
                    </div>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                 @endif
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Periodo</th>
                            <th>Puesto</th>
                            <th>Empresa</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($experiencias as $experiencia)
                            <tr>
                                <td>{{$experiencia->Periodo}}</td>
                                <td>{{$experiencia->Puesto}}</td>
                                <td>{{$experiencia->Empresa}}</td>
                                <td><form action="{{ route('experienciaProfesional.destroy',$experiencia->id) }}" method="POST">
                                    {{link_to_route('experienciaProfesional.edit','Editar',[$experiencia->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>CURSOS, DIPLOMADOS, TALLERES (TOMADOS)
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="pull-right">
                        {{link_to_route('cursoTomado.show','+',$id_p,['class'=>'btn btn-primary'])}}  
                    </div>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                 @endif
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Año</th>
                            <th>Nombre</th>
                            <th>Modalidad</th>
                            <th>Duración en horas</th>
                            <th>Constancia</th>
                            <th></th>
                        </tr>
                                  
                        </thead>
                        <tbody>
                        @foreach($cursosTomados as $cursot)
                            <tr>
                                <td>{{$cursot->año}}</td>
                                <td>{{$cursot->nombre}}</td>
                                <td>{{$cursot->modalidad}}</td>
                                <td>{{$cursot->duraciónHrs}}</td>
                                <td><a href="../constancias/{{$cursot->constancia}}" class="btn-primary" target="_blank">
                                    <i class="fas fa-download"></i>
                                </a>
                                </td>
                                <td><form action="{{ route('cursoTomado.destroy',$cursot->id) }}" method="POST">
                                    {{link_to_route('cursoTomado.edit','Editar',[$cursot->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>CURSOS, DIPLOMADOS, TALLERES (IMPARTIDOS)
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="pull-right">
                        {{link_to_route('cursoImpartido.show','+',$id_p,['class'=>'btn btn-primary'])}}  
                    </div>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                 @endif
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Año</th>
                            <th>Nombre</th>
                            <th>Modalidad</th>
                            <th>Duración en horas</th>
                            <th>Constancia</th>
                            <th></th>
                        </tr>
                                  
                        </thead>
                        <tbody>
                        @foreach($cursosImpartidos as $cursoi)
                            <tr>
                                <td>{{$cursoi->año}}</td>
                                <td>{{$cursoi->nombre}}</td>
                                <td>{{$cursoi->modalidad}}</td>
                                <td>{{$cursoi->duraciónHrs}}</td>
                                <td><a href="../constancias/{{$cursoi->constancia}}" class="btn-primary" target="_blank">
                                    <i class="fas fa-download"></i>
                                </a>
                                </td>
                                <td><form action="{{ route('cursoImpartido.destroy',$cursoi->id) }}" method="POST">
                                    {{link_to_route('cursoImpartido.edit','Editar',[$cursoi->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>INVESTIGACIONES
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="pull-right">
                        {{link_to_route('investigacion.show','+',$id_p,['class'=>'btn btn-primary'])}}  
                    </div>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                 @endif
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Año</th>
                            <th>Nombre</th>
                            <th>Presentado en</th>
                            <th>Indexada en</th>
                            <th>Memoria en línea</th>
                            <th>Artículo</th>
                            <th></th>
                        </tr>
                                  
                        </thead>
                        <tbody>
                        @foreach($investigaciones as $investigacion)
                            <tr>
                                <td>{{$investigacion->año}}</td>
                                <td>{{$investigacion->nombre}}</td>
                                <td>{{$investigacion->presentado}}</td>
                                <td>{{$investigacion->indexado}}</td>
                                <td>{{$investigacion->ligaMemoria}}</td>
                                <td><a href="../constancias/{{$investigacion->articulo}}" class="btn-primary" target="_blank">
                                    <i class="fas fa-download"></i>
                                </a>
                                </td>
                                <td><form action="{{ route('investigacion.destroy',$investigacion->id) }}" method="POST">
                                    {{link_to_route('investigacion.edit','Editar',[$investigacion->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>HABILIDADES Y CONOCIMIENTOS:
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="pull-right">
                        {{link_to_route('habilidad.show','+',$id_p,['class'=>'btn btn-primary'])}}  
                    </div>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                 @endif
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Descripción</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($habilidades as $habilidad)
                            <tr>
                                <td>{{$habilidad->descripcion}}</td>
                                <td><form action="{{ route('habilidad.destroy',$habilidad->id) }}" method="POST">
                                    {{link_to_route('habilidad.edit','Editar',[$habilidad->id],['class'=>'btn btn-primary'])}}| 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>    
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




                    