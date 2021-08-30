<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--CSRF Token--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{--Title and Meta--}}
        {{-- @meta -- }}

        {{--Common App Styles--}}
        {{ Html::style(mix('assets/app/css/app.css')) }}
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


        {{--Styles--}}
        @yield('styles')

        {{--Head--}}
        @yield('head')

    </head>
    <body class="@yield('body_class')">
        <div id='loading' style='display: none;'>
      <div class='spinner'>
        <img src="http://poa.zitacuaro.tecnm.mx/docs/img/Petirrojos.jpg" class='imgPeti' style='width:70px; height:70px;' />
        <div class='bounce1'></div>
        <div class='bounce2'></div>
        <div class='bounce3'></div>
      </div>
    </div>
    <div class="row">
        <div id="contenido" class="col-md-12 col-sm-12 col-xs-12">
        </div>
    </div>

        {{--Page--}}
        @yield('page')

        {{--Common Scripts--}}
        {{ Html::script(mix('assets/app/js/app.js')) }}

        {{--Laravel Js Variables--}}
        {{-- @tojs ---}}

        {{--Scripts--}}
        @yield('scripts')
        @stack('scripts')
        <script type="text/javascript">
            $(window).load(function mp(){ $('#loading').fadeIn( 400, "linear"); }); //funcion para mostar
            $(window).load(function op(){ $('#loading').fadeOut( 10, "linear"); }); // funcion para ocultar
            

            
        </script>
    </body>
</html>
