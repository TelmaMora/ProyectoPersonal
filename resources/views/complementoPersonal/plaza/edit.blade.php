@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar | Plaza
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <form class="form-horizontal form-label-left" action="{{ route('plaza.update',$plaza->id) }}" method="post" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripción:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="descripcion" id="descripcion" value="{{ $plaza->descripcion }}" class="form-control" required="required" placeholder="Descripcion">
                        </div>
                    </div>
                    
                     <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">Categoria:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <select id="categoria" name="categoria">
                                <option value="-1">Selecciona tu categoria</option>
                                @foreach ($catalogoPlazas as $plaza)
                                    <option value="{{$plaza->id}}">UNI/SUB: {{$plaza->UNI}}, Categoria: {{$plaza->CATEGORÍA}}, Horas: {{$plaza->HORAS}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoMov">Tipo de Movimiento:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="tipoMov" id="tipoMov" value="{{ $plaza->tipoMov }}" class="form-control" required="required" placeholder="Tipo de Movimiento">
                        </div>
                    </div>

                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Diagonal">Diagonal:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="Diagonal" id="Diagonal" value="{{ $plaza->Diagonal }}" class="form-control" required="required" placeholder="Diagonal">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horasNombramiento">Horas de Nombramiento:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="horasNombramiento" id="horasNombramiento" value="{{ $plaza->horasNombramiento }}"class="form-control" required="required" placeholder="Horas de Nombramiento">
                        </div>
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
