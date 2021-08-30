@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar | Experiencia Profesional
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('experienciaProfesional.update',$experienciaProfesional->id) }}" method="post" autocomplete="off">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="periodo">Periodo:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="periodo" id="periodo" value="{{ $experienciaProfesional->Periodo }}" class="form-control" required="required" placeholder="2010-2015">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="puesto">Puesto:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="puesto" id="puesto" value="{{ $experienciaProfesional->Puesto }}" class="form-control" required="required" placeholder="Descripcion">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="empresa">Empresa:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="empresa" id="empresa" value="{{ $experienciaProfesional->Empresa }}" class="form-control" required="required" placeholder="2010-2015">
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
