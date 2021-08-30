@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar | Formación Académica
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('formacionacademica.update',$formacionacademica->id) }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
                 @csrf
                @method('PUT')
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="periodo">Periodo:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="periodo" id="periodo" value="{{ $formacionacademica->periodo }}" class="form-control" required="required" placeholder="2010-2015">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gradoEstudios">Grado Académico Abreviado:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="gradoEstudios" id="gradoEstudios" value="{{ $formacionacademica->gradoEstudios }}" class="form-control" required="required" placeholder="Dr., Ing., MC., M.en.C.,L.I., Lic., Med.">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre de la carrera:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="nombre" id="nombre" value="{{ $formacionacademica->nombre }}" class="form-control" required="required" placeholder="Nombre de la carrera">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaTitulacion">Fecha de titulación:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="fechaTitulacion" id="fechaTitulacion" value="{{ $formacionacademica->fechaTitulacion }}" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
                    </div>
                    @if($formacionacademica->situacion=="PT")
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="situacion">Situación:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="situacion" name="situacion">
                            <option value="PT" selected="selected">Pasante Técnico</option>
                            <option value="TT">Título de Técnico</option>
                            <option value="TL">Título de Licenciatura</option>
                            <option value="PL">Pasante de Licenciatura</option>
                            <option value="SG">Sin Grado</option>
                            <option value="CG">Con grado</option>
                        </select>
                        </div>
                    </div>
                    @elseif($formacionacademica->situacion=="TT")
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="situacion">Situación:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="situacion" name="situacion">
                            <option value="PT">Pasante Técnico</option>
                            <option value="TT" selected="selected">Título de Técnico</option>
                            <option value="TL">Título de Licenciatura</option>
                            <option value="PL">Pasante de Licenciatura</option>
                            <option value="SG">Sin Grado</option>
                            <option value="CG">Con grado</option>
                        </select>
                        </div>
                    </div>
                    @elseif($formacionacademica->situacion=="TL")
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="situacion">Situación:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="situacion" name="situacion">
                            <option value="PT">Pasante Técnico</option>
                            <option value="TT">Título de Técnico</option>
                            <option value="TL" selected="selected">Título de Licenciatura</option>
                            <option value="PL">Pasante de Licenciatura</option>
                            <option value="SG">Sin Grado</option>
                            <option value="CG">Con grado</option>
                        </select>
                        </div>
                    </div>
                    @elseif($formacionacademica->situacion=="PL")
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="situacion">Situación:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="situacion" name="situacion">
                            <option value="PT">Pasante Técnico</option>
                            <option value="TT">Título de Técnico</option>
                            <option value="TL">Título de Licenciatura</option>
                            <option value="PL"selected="selected">Pasante de Licenciatura</option>
                            <option value="SG">Sin Grado</option>
                            <option value="CG">Con grado</option>
                        </select>
                        </div>
                    </div>
                    @elseif($formacionacademica->situacion=="SG")
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="situacion">Situación:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="situacion" name="situacion">
                            <option value="PT">Pasante Técnico</option>
                            <option value="TT">Título de Técnico</option>
                            <option value="TL">Título de Licenciatura</option>
                            <option value="PL">Pasante de Licenciatura</option>
                            <option value="SG"selected="selected">Sin Grado</option>
                            <option value="CG">Con grado</option>
                        </select>
                        </div>
                    </div>
                    @else
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="situacion">Situación:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="situacion" name="situacion">
                            <option value="PT">Pasante Técnico</option>
                            <option value="TT">Título de Técnico</option>
                            <option value="TL">Título de Licenciatura</option>
                            <option value="PL">Pasante de Licenciatura</option>
                            <option value="SG">Sin Grado</option>
                            <option value="CG" selected="selected">Con grado</option>
                        </select>
                        </div>
                    </div>
                    @endif
                    
                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cedula">Cédula Profesional:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="cedula" id="cedula" value="{{ $formacionacademica->cedula }}" class="form-control" required="required" placeholder="Cédula Profesional">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rutaCertificado">Imagen Certificado</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="rutaCertificado" id="rutaCertificado">
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <label class="control-label" for="rutaCertificado">Ver actual</label>
                        <a href="../imagenes/{{$formacionacademica->rutaCertificado}}" class="btn-primary" target="_blank">
                                    <i class="fas fa-eye"></i>
                                </a>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rutaTitulo">Imagen Título</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="rutaTitulo" id="rutaTitulo">
                        </div>
                    </div>
                    <div class="form-group" align="center">
                         <label class="control-label" for="rutaCertificado">Ver actual</label>
                        <a href="../imagenes/{{$formacionacademica->rutaTitulo}}" class="btn-primary" target="_blank">
                                    <i class="fas fa-eye"></i>
                                </a>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rutaCedula">Imagen Cédula</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="rutaCedula" id="rutaCedula">
                        </div>
                        
                    </div>
                    <div class="form-group" align="center">
                        <label class="control-label" for="rutaCertificado">Ver actual</label>
                        <a href="../imagenes/{{$formacionacademica->rutaCedula}}" class="btn-primary" target="_blank">
                                    <i class="fas fa-eye"></i>
                                </a>
                    </div>
                    
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
