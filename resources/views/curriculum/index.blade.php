<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curriculum Vitae</title>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <style type="text/css">
    body{
      background-color: #2a3f54;
    }
    div{
      background-color: white;
      border: 1px solid black;
      padding: 12px;
      width: 90%;
      margin: 0 auto;
    }
    fieldset{
      margin-bottom: 12px;
    }
    legend{
      background-color: #40c2a6;
      padding: 5px;
      border-radius: 20px;
      font-weight: bold;
    }
    img{
      border-radius: 50%;
      margin-bottom: 12px;
      margin-right: 30px;
      float: left;
    }
    span{
      font-weight: bold;
    }

  </style>
</head>
<body style="font-size: 14px">
  <div>
    <img src="./fotosPerf/{{$personal->imagen}}" alt="profile_pic" alt="2x2" width="120" height="120">
    <h1>{{$personal->nombre}} {{$personal->apellido_paterno}} {{$personal->apellido_materno}}</h1>
    <p>{{$personal->titulo}}</p>
    <p>{{$contacto->estado}}, {{$contacto->municipio}}, México
    <p><span>Puesto y funcion:</span>{{$complementoPersonal->areaAdscripcion}}, {{$complementoPersonal->funcion}}</p>
    <p><span>Correo:</span>{{$personal->correo}}</p>
    @if(count($experiencias)>0)
    <fieldset>
      <legend>Experiencia Laboral</legend>
      <ul>
        @foreach($experiencias as $experiencia)
        <li>
          <span>Periodo: </span>{{$experiencia->Periodo}}<br>
          <span>Empresa: </span>{{$experiencia->Empresa}}<br>
          <span>Puesto: </span>{{$experiencia->Puesto}}<br>
        </li>
        @endforeach
      </ul>
    </fieldset>
    @endif
    <fieldset>
      @if(count($formaciones)>0)
      <legend>Formacion Academica</legend>
      <ul>
        @foreach($formaciones as $formacion)
        <li>
          <span>Periodo: </span>{{$formacion->periodo}}<br>
          <span>Nombre: </span>{{$formacion->nombre}}<br>
          <span>Grado: </span>{{$formacion->gradoEstudios}}<br>
          <span>Situacion: </span>{{$formacion->situacion}}<br>
          <span>Cedula: </span>{{$formacion->cedula}}<br>
          <span>Fecha de Titulacion: </span>{{$formacion->fechaTitulacion}}<br>
        </li>
      @endforeach
    </ul>
    </fieldset>
    @endif
    @if(count($cursosTomados)>0)
    <fieldset>
      <legend>Cursos, diplomados, talleres (tomados)</legend>
      <ul>
        @foreach($cursosTomados as $cursot)
        <li>
          <span>Año: </span>{{$cursot->año}}<br>
          <span>Nombre: </span>{{$cursot->nombre}}<br> 
          <span>Modalidad: </span>{{$cursot->modalidad}}<br>
          <span>Duracion: </span>{{$cursot->duraciónHrs}}<br>
        </li>
        @endforeach
      </ul>
    </fieldset>
    @endif
    @if(count($cursosImpartidos)>0)
    <fieldset>
      <legend>Cursos, diplomados, talleres (Impartidos)</legend>
      <ul>
        @foreach($cursosImpartidos as $cursoi)
        <li>
          <span>Año: </span>{{$cursoi->año}}<br>
          <span>Nombre: </span>{{$cursoi->nombre}}<br> 
          <span>Modalidad: </span>{{$cursoi->modalidad}}<br>
          <span>Duracion: </span>{{$cursoi->duraciónHrs}}<br>
        </li>
        @endforeach
      </ul>
    </fieldset>
    @endif
    @if(count($investigaciones)>0)
    <fieldset>
      <legend>Investigacion</legend>
      <ul>
        @foreach($investigaciones as $investigacion)
        <li>
          <span>Año: </span>{{$investigacion->año}}<br>
          <span>Nombre: </span>{{$investigacion->nombre}}<br>
          <span>Presentado en: </span>{{$investigacion->presentado}}<br>
          <span>Indexado en: </span>{{$investigacion->indexado}}
          <br><span>Liga de memoria: </span><a href="{{$investigacion->ligaMemoria}}">{{$investigacion->ligaMemoria}}</a>
          <br><span>Articulo: <a href="{{$investigacion->articulo}}">{{$investigacion->articulo}}</a></span> 
        </li>
        @endforeach
      </ul>
    </fieldset>
    @endif
    @if(count($habilidades)>0)
    <fieldset>
      <legend>Habilidades</legend>
      <ul>
        @foreach($habilidades as $habilidad)
        <li>
          <span>Descripcion: </span>{{$habilidad->descripcion}}<br>
        </li>
      @endforeach
    </ul>
    </fieldset>
    @endif
  </div>
</body>
</html>