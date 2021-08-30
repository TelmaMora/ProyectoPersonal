    
@extends('admin.layouts.admin')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Personal
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>
                <div class="pull-right">
                    {{link_to_route('personal.create','+',null,['class'=>'btn btn-primary'])}} 
                    </div>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                 @endif
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover">       
                        <thead>
                        <tr>
                            <th>Tarjeta</th>
                            <th>RFC</th>
                            <th>CURP</th>
                            <th>Título</th>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Estado</th>
                            <th>Sexo</th>
                            <th>Imagen</th>
                            <th>Abreviatura</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($personal as $persona)
                            <tr>
                                <td>{{$persona->id}}</td>
                                <td>{{$persona->rfc}}</td>
                                <td>{{$persona->curp}}</td>
                                <td>{{$persona->titulo}}</td>
                                <td>{{$persona->nombre}}</td>
                                <td>{{$persona->apellido_paterno}}</td>
                                <td>{{$persona->apellido_materno}}</td>
                                <td>{{$persona->correo}}</td>
                                <td>{{$persona->telefono}}</td>
                                <td>{{$persona->estado}}</td>
                                <td>{{$persona->sexo}}</td>
                                <td><img src="../fotosPerf/{{$persona->imagen}}" width="40"></td>
                                <td>{{$persona->abreviatura}}</td>
                                <td><form action="{{ route('personal.destroy',$persona->id) }}" method="POST">
                                    {{link_to_route('personal.edit','Editar',[$persona->id],['class'=>'btn btn-primary'])}}| 
                                    {{link_to_route('complementoPersonal.show','Ver más',[$persona->id],['class'=>'btn btn-primary'])}}|
                                    {{link_to_route('curriculum.show','Ver Curriculum',[$persona->id],['class'=>'btn btn-primary'])}}|
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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

