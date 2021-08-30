@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar | Investigación
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('investigacion.update',$investigacion->id) }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="año">Año:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" name="año" id="año" class="form-control" value="{{$investigacion->año}}" required="required" placeholder="Año">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$investigacion->nombre}}" required="required" placeholder="Nombre">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="presentado">Presentado en:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="presentado" id="presentado" value="{{$investigacion->presentado}}" class="form-control" required="required" placeholder="Presentado en">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="indexado">Indexada en:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="indexado" id="indexado" value="{{$investigacion->indexado}}" class="form-control" required="required" placeholder="Scielo, ISI, EBSCO, Scopus...">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ligaMemoria">Memoria en línea:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="ligaMemoria" id="ligaMemoria" value="{{$investigacion->ligaMemoria}}" class="form-control" required="required" placeholder="Memoria en linea">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="articulo">Artículo:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="articulo" id="articulo">
                        </div>
                    </div>
                    <div class="form-group" align="center">
                         <label class="control-label" for="articulo">Ver actual</label>
                        <a href="../../articulos/{{$investigacion->articulo}}" class="btn-primary" target="_blank">
                                    <i class="fas fa-eye"></i>
                        </a>
                    </div>
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
