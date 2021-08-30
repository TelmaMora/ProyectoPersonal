
@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Crear nuevo | Conyugue
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

             
            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('conyugue.store') }}" method="post" autocomplete="off">

                 <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="hidden" name="personal" id="personal" class="form-control" value="{{$id_p}}">
                        </div>   
                </div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="nombre" id="nombre" class="form-control" required="required" placeholder="Nombre">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidoP">Apellido Paterno:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="apellidoP" id="apellidoP" class="form-control" required="required" placeholder="Apellido Paterno">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidoM">Apellido Mterno:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="apellidoM" id="apellidoM" class="form-control" required="required" placeholder="Apellido Materno">
                        </div>   
                    </div>
                  
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Teléfono:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="telefono" id="telefono" class="form-control" required="required" placeholder="Telefono">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaNac">Fecha de Nacimiento:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="fechaNac" id="fechaNac" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
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
