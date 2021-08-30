@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Crear nuevo | Experiencia Profesional
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('experienciaProfesional.store') }}" method="post" autocomplete="off">
                <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="hidden" name="personal" id="personal" class="form-control" value="{{ $id }}">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="periodo">Periodo:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="periodo" id="periodo" class="form-control" required="required" placeholder="2010-2015">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="puesto">Puesto:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="puesto" id="puesto" class="form-control" required="required" placeholder="Puesto">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="empresa">Empresa:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="empresa" id="empresa" class="form-control" required="required" placeholder="Empresa">
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
