@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Crear nuevo | Investigación
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('investigacion.store') }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
                <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="hidden" name="personal" id="personal" class="form-control" value="{{ $id }}">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="año">Año:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" name="año" id="año" class="form-control" required="required" placeholder="Año">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="nombre" id="nombre" class="form-control" required="required" placeholder="Nombre">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="presentado">Presentado en:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="presentado" id="presentado" class="form-control" required="required" placeholder="Presentado en">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="indexado">Indexada en:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="indexado" id="indexado" class="form-control" required="required" placeholder="Scielo, ISI, EBSCO, Scopus...">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ligaMemoria">Memoria en línea:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="ligaMemoria" id="ligaMemoria" class="form-control" required="required" placeholder="Memoria en linea">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="articulo">Artículo:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="articulo" id="articulo">
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
