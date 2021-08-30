@extends('admin.layouts.admin')

@section('content')
    {{--<div class="row">--}}
        {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}


            {{--<div class="col-md-8">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">Bienvenido</div>--}}

                    {{--<div class="card-body">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success" role="alert">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--You are logged in!--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    {{--@include('admin.sections.top')--}}
    <div class="row">
        <div id="contenido" class="col-md-12 col-sm-12 col-xs-12">
        </div>
    </div>

    <div class="row">

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
