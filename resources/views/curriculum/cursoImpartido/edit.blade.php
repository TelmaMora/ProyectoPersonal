@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar | Curso, diplomado, taller (impartido)
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('cursoImpartido.update',$cursoImpartido->id) }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="año">Año:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" name="año" id="año" value="{{$cursoImpartido->año}}" class="form-control" required="required" placeholder="Año">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="nombre" id="nombre" value="{{$cursoImpartido->nombre}}" class="form-control" required="required" placeholder="Nombre">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="modalidad">Modalidad:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="modalidad" id="modalidad" value="{{$cursoImpartido->modalidad}}" class="form-control" required="required" placeholder="Modalidad">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="duracionHrs">Duración en horas:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" name="duracionHrs" id="duracionHrs" value="{{$cursoImpartido->duraciónHrs}}" class="form-control" required="required" placeholder="Duracion en horas">
                        </div>   
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="constancia">Constancia</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="constancia" id="constancia">
                        </div>
                    </div>
                    <div class="form-group" align="center">
                         <label class="control-label" for="constancia">Ver actual</label>
                        <a href="../../constancias/{{$cursoImpartido->constancia}}" class="btn-primary" target="_blank">
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
