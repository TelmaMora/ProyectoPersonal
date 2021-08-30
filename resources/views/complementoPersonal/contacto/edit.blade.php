

@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar | Contacto
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
             <form class="form-horizontal form-label-left" action="{{ route('contacto.update',$contacto->id) }}" method="post" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="calle">Calle:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="calle" id="calle" value="{{ $contacto->calle }}" class="form-control" required="required" placeholder="Calle">
                        </div>   
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numero">Número:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" name="numero" id="numero" value="{{ $contacto->numero }}" class="form-control" required="required" placeholder="Numero">
                        </div>   
                    </div>
                   
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estado">Estado:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select name="estado" id="estado"><option>Selecciona tu estado</option></select>
                        </div>   
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="municipio">Municipio:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select name="municipio" id="municipio"><option>Selecciona tu municipio</option></select>
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigoPostal">Código Postal:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="codigoPostal" id="codigoPostal" value="{{ $contacto->codigoPostal }}" class="form-control" required="required" placeholder="Codigo Postal">
                        </div>   
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="colonia">Colonia:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="colonia" id="colonia" value="{{ $contacto->colonia }}" class="form-control" required="required" placeholder="Colonia">
                        </div>   
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="celular">Celular:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="celular" id="celular" value="{{ $contacto->celular }}" class="form-control" required="required" placeholder="Celular">
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
