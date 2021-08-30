<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PERSONAL NO DOCENTE</title>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <style type="text/css">
    table {
   width: 100%;
   border: 1px solid #000;
}
th, td {
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-spacing: 0;
   border-collapse: collapse;

}
  </style>
</head>
<body>
  <div align="center"><b>Instituto Tecnológico de Zitácuaro</b></div><br>
  <div align="center"><b>Personal No Docente</b></div><br>
  <div>Periodo: {{date("m")}}/{{date("Y")}}</div>
  <div><br></div>
  <table align="center" cellspacing="0">
    <thead>
      <tr>
        <th rowspan="3">Grado Maximo de estudios</th>
        <th colspan="13"><center>Funciones</center></th>
      </tr>
      <tr>
        <th colspan="2"><center>SERVICIOS</center></th>
        <th colspan="2"><center>ADMINISTRATIVAS</center></th>
        <th colspan="2"><center>ANALISTAS</center></th>
        <th colspan="2"><center>DOCENCIA</center></th>
        <th colspan="2"><center>CON DISCAPACIDAD</center></th>
        <th colspan="3"><center>TOTALES</center></th>
      </tr>
      <tr>
        <th><center>H</center></th>
        <th><center>M</center></th>
        <th><center>H</center></th>
        <th><center>M</center></th>
        <th><center>H</center></th>
        <th><center>M</center></th>
        <th><center>H</center></th>
        <th><center>M</center></th>
        <th><center>H</center></th>
        <th><center>M</center></th>
        <th><center>H</center></th>
        <th><center>M</center></th>
        <th><center>T</center></th>
      </tr>
    </thead>
    <tr>
        <td>Primaria</td>
        <td>{{count($p1)}}</td>
        <td>{{count($p2)}}</td>
        <td>{{count($p3)}}</td>
        <td>{{count($p4)}}</td>
        <td>{{count($p5)}}</td>
        <td>{{count($p6)}}</td>
        <td>{{count($p7)}}</td>
        <td>{{count($p8)}}</td>
        <td>{{count($p9)}}</td>
        <td>{{count($p10)}}</td>
        <td>{{count($pph)}}</td>
        <td>{{count($ppm)}}</td>
        <td>{{count($ppt)}}</td>
    </tr>
    <tr>
        <td>Secundaria</td>
        <td>{{count($ps1)}}</td>
        <td>{{count($ps2)}}</td>
        <td>{{count($ps3)}}</td>
        <td>{{count($ps4)}}</td>
        <td>{{count($ps5)}}</td>
        <td>{{count($ps6)}}</td>
        <td>{{count($ps7)}}</td>
        <td>{{count($ps8)}}</td>
        <td>{{count($ps9)}}</td>
        <td>{{count($ps10)}}</td>
        <td>{{count($psh)}}</td>
        <td>{{count($psm)}}</td>
        <td>{{count($pst)}}</td>
    </tr>
   <tr>
        <td>Bachillerato</td>
        <td>{{count($pb1)}}</td>
        <td>{{count($pb2)}}</td>
        <td>{{count($pb3)}}</td>
        <td>{{count($pb4)}}</td>
        <td>{{count($pb5)}}</td>
        <td>{{count($pb6)}}</td>
        <td>{{count($pb7)}}</td>
        <td>{{count($pb8)}}</td>
        <td>{{count($pb9)}}</td>
        <td>{{count($pb10)}}</td>
        <td>{{count($pbh)}}</td>
        <td>{{count($pbm)}}</td>
        <td>{{count($pbt)}}</td>
    </tr>
    <tr>     
        <td>Técnico</td>
        <td>{{count($pt1)}}</td>
        <td>{{count($pt2)}}</td>
        <td>{{count($pt3)}}</td>
        <td>{{count($pt4)}}</td>
        <td>{{count($pt5)}}</td>
        <td>{{count($pt6)}}</td>
        <td>{{count($pt7)}}</td>
        <td>{{count($pt8)}}</td>
        <td>{{count($pt9)}}</td>
        <td>{{count($pt10)}}</td>
        <td>{{count($pth)}}</td>
        <td>{{count($ptm)}}</td>
        <td>{{count($ptt)}}</td>
    </tr>
    <tr>        
        <td>Licenciatura</td>
        <td>{{count($pl1)}}</td>
        <td>{{count($pl2)}}</td>
        <td>{{count($pl3)}}</td>
        <td>{{count($pl4)}}</td>
        <td>{{count($pl5)}}</td>
        <td>{{count($pl6)}}</td>
        <td>{{count($pl7)}}</td>
        <td>{{count($pl8)}}</td>
        <td>{{count($pl9)}}</td>
        <td>{{count($pl10)}}</td>
        <td>{{count($plh)}}</td>
        <td>{{count($plm)}}</td>
        <td>{{count($plt)}}</td>
    </tr>
    <tr>
        <td>Especialidad</td>
        <td>{{count($pe1)}}</td>
        <td>{{count($pe2)}}</td>
        <td>{{count($pe3)}}</td>
        <td>{{count($pe4)}}</td>
        <td>{{count($pe5)}}</td>
        <td>{{count($pe6)}}</td>
        <td>{{count($pe7)}}</td>
        <td>{{count($pe8)}}</td>
        <td>{{count($pe9)}}</td>
        <td>{{count($pe10)}}</td>
        <td>{{count($peh)}}</td>
        <td>{{count($pem)}}</td>
        <td>{{count($pet)}}</td>
    </tr>
    <tr>       
        <td>Mtria. con grado</td>
        <td>{{count($pmg1)}}</td>
        <td>{{count($pmg2)}}</td>
        <td>{{count($pmg3)}}</td>
        <td>{{count($pmg4)}}</td>
        <td>{{count($pmg5)}}</td>
        <td>{{count($pmg6)}}</td>
        <td>{{count($pmg7)}}</td>
        <td>{{count($pmg8)}}</td>
        <td>{{count($pmg9)}}</td>
        <td>{{count($pmg10)}}</td>
        <td>{{count($pmgh)}}</td>
        <td>{{count($pmgm)}}</td>
        <td>{{count($pmgt)}}</td>
    </tr>
    <tr>     
        <td>Dr. con grado</td>
        <td>{{count($pdrg1)}}</td>
        <td>{{count($pdrg2)}}</td>
        <td>{{count($pdrg3)}}</td>
        <td>{{count($pdrg4)}}</td>
        <td>{{count($pdrg5)}}</td>
        <td>{{count($pdrg6)}}</td>
        <td>{{count($pdrg7)}}</td>
        <td>{{count($pdrg8)}}</td>
        <td>{{count($pdrg9)}}</td>
        <td>{{count($pdrg10)}}</td>
        <td>{{count($pdrgh)}}</td>
        <td>{{count($pdrgm)}}</td>
        <td>{{count($pdrgt)}}</td>
    </tr>
    <tr>        
        <td>Otros</td>
        <td>{{count($po1)}}</td>
        <td>{{count($po2)}}</td>
        <td>{{count($po3)}}</td>
        <td>{{count($po4)}}</td>
        <td>{{count($po5)}}</td>
        <td>{{count($po6)}}</td>
        <td>{{count($po7)}}</td>
        <td>{{count($po8)}}</td>
        <td>{{count($po9)}}</td>
        <td>{{count($po10)}}</td>
        <td>{{count($poh)}}</td>
        <td>{{count($pom)}}</td>
        <td>{{count($pot)}}</td>
    </tr>        
    <tr>
        <td>Totales</td>
        <td>{{$t1}}</td>
        <td>{{$t2}}</td>
        <td>{{$t3}}</td>
        <td>{{$t4}}</td>
        <td>{{$t5}}</td>
        <td>{{$t6}}</td>
        <td>{{$t7}}</td>
        <td>{{$t8}}</td>
        <td>{{$t9}}</td>
        <td>{{$t10}}</td>
        <td>{{$t11}}</td>
        <td>{{$t12}}</td>
        <td>{{$t13}}</td>
    </tr>
    <tr>
        <td><br></td>
        <td><br></td>
        <td><br></td>
        <td><br></td>
        <td><br></td>
        <td><br></td>
        <td><br></td>
        <td><br></td>
        <td><br></td>
        <td><br></td>
        <td><br></td>
        <td><br></td>
        <td><br></td>
        <td><br></td>
    </tr>
  </table>
</body>
</html>