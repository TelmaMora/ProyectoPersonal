

@extends('admin.layouts.admin')

@section('content')


    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Crear nuevo | Ingreso
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('ingreso.store') }}" method="post" autocomplete="off">
                <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="hidden" name="personal" id="personal" class="form-control" value="{{ $rht_personal->id }}">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="finicioGob">Fecha de inicio Gobierno:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="finicioGob" id="finicioGob" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="finicioGob">Fecha de inicio Sep:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="finicioSep" id="finicioSep" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="finicioGob">Fecha de inicio Plantel:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="finicioPlantel" id="finicioPlantel" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="RAMA">Fecha de inicio RAMA:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="date" name="RAMA" id="RAMA" class="form-control" max="{{ date('Y-m-d') }}">
                        </div>   
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo">Tipo:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="tipo" name="tipo">
                            <option value="Docente">Docente</option>
                            <option value="No docente">No Docente</option>
                            <option value="No docente">Directivo</option>
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group"> 
                        <div class="col-md-9 col-sm-9 col-xs-12">          
                            <select id="Funcion" class="form-control" name="Funcion" disabled>
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
