@extends('admin.layouts.admin')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Crear nuevo | Personal
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('personal.store') }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rfc">RFC:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="rfc" id="rfc" class="form-control" required="required" placeholder="RFC">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="curp">CURP:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="curp" id="curp" class="form-control" required="required" placeholder="CURP">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo">Título:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="titulo" id="titulo" class="form-control" required="required" placeholder="Titulo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="nombre" id="nombre" class="form-control" required="required" placeholder="Nombre">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido_paterno">Apellido Paterno:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" required="required" placeholder="Apellido Paterno">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido_materno">Apellido Materno:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" required="required" placeholder="Apellido Materno">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correo">Correo:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="email" name="correo" id="correo" class="form-control" required="required" placeholder="Correo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Teléfono:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="telefono" id="telefono" class="form-control" required="required" placeholder="Telefono">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estado">Estado:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="estado" name="estado">
                            <option value="0">Activo</option>
                            <option value="1">Inactivo</option>
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="imagen">Imagen:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" name="imagen" id="imagen" class="form-control" required="required" placeholder="Imagen">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sexo">Sexo:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <input type="radio" name="sexo" value="H"> H
                           <input type="radio" name="sexo" value="M"> M
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="abreviatura">Abreviatura:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="abreviatura" id="abreviatura" class="form-control" required="required" placeholder="Abreviatura">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuario">Usuario:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="email" name="usuario" id="usuario" class="form-control" required="required" placeholder="Usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseña">Contraseña:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="password" name="contraseña" id="contraseña" class="form-control" required="required" placeholder="Contraseña">
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
