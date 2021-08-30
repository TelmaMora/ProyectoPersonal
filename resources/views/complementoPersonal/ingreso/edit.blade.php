

@extends('admin.layouts.admin')

@section('content')


    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar | Ingreso 
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('ingreso.update',$rht_ingreso->id) }}" method="post" autocomplete="off">
                @csrf
                @method('PUT')
                                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="finicioGob">Fecha de inicio Gobierno:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="finicioGob" id="finicioGob" value="{{ $rht_ingreso->finicioGob }}" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="finicioSep">Fecha de inicio Sep:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="finicioSep" id="finicioSep" value="{{ $rht_ingreso->finicioSep }}" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="finicioPlantel">Fecha de inicio Plantel:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="finicioPlantel" id="finicioPlantel" value="{{ $rht_ingreso->finicioPlantel }}" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="RAMA">Fecha de inicio RAMA:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="RAMA" id="RAMA" value="{{ $rht_ingreso->RAMA }}" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
                    </div>

                     @if($rht_ingreso->tipo=="Docente")
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo">Tipo:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="tipo" name="tipo">
                            <option value="Docente" selected="selected">Docente</option>
                            <option value="No docente">No docente</option>
                            <option value="No docente">Directivo</option>
                        </select>
                        </div>
                    </div>
                    @elseif($rht_ingreso->tipo=="No docente")
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo">Tipo:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="tipo" name="tipo">
                            <option value="Docente">Docente</option>
                            <option value="No docente" selected="selected">No Docente</option>
                            <option value="No docente">Directivo</option>
                        </select>
                        </div>
                    </div>
                     @else
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo">Tipo:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="tipo" name="tipo">
                            <option value="Docente">Docente</option>
                            <option value="No docente">No docente</option>
                            <option value="No docente" selected="selected">Directivo</option>
                        </select>
                        </div>
                    </div>
                     @endif 
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo">Función:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="funcion" name="funcion" disabled>
                            <option selected disabled >Función</option>
                            <option value="Servicios">SERVICIOS</option>
                            <option value="Administrativas">ADMINISTRATIVAS</option>
                            <option value="Analistas">ANALISTAS</option>
                            <option value="Docencia">DOCENCIA</option>
                            <option value="Con discapacidad">CON DISCAPACIDAD</option>
                        </select>
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
