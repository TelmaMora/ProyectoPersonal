<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DOCENTES Y NO DOCENTES POR EDAD Y GENERO</title>
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
  <div align="center"><b>DOCENTES Y NO DOCENTES POR EDAD Y GENERO</b></div><br>
  <div>Periodo: {{date("m")}}/{{date("Y")}}</div>
  <div><br></div>
  <table align="center" cellspacing="0">
    <thead>
      <tr>
        <th colspan="2" rowspan="2">Tipo de personal</th>
        <th colspan="2">Menos de 20</th>
        <th colspan="2">20 a 24</th>
        <th colspan="2">25 a 29</th>
        <th colspan="2">30 a 34</th>
        <th colspan="2">35 a 39</th>
        <th colspan="2">40 a 44</th>
        <th colspan="2">45 a 49</th>
        <th colspan="2">50 a 54</th>
        <th colspan="2">55 a 59</th>
        <th colspan="2">60 a 65</th>
        <th colspan="2">65 o más</th>
        <th colspan="3">totales</th>
      </tr>
      <tr>
        
        <th>H</th>
        <th>M</th>
        <th>H</th>
        <th>M</th>
        <th>H</th>
        <th>M</th>
        <th>H</th>
        <th>M</th>
        <th>H</th>
        <th>M</th>
        <th>H</th>
        <th>M</th>
        <th>H</th>
        <th>M</th>
        <th>H</th>
        <th>M</th>
        <th>H</th>
        <th>M</th>
        <th>H</th>
        <th>M</th>
        <th>H</th>
        <th>M</th>
        <th>H</th>
        <th>M</th>
        <th>T</th>
      </tr>
    </thead>
    <tr>
        <td colspan="2">Docente</td>
        <td>{{$r1}}</td>
        <th>{{$r1m}}</th>
        <th>{{$r2}}</th>
        <th>{{$r2m}}</th>
        <th>{{$r3}}</th>
        <th>{{$r3m}}</th>
        <th>{{$r4}}</th>
        <th>{{$r4m}}</th>
        <th>{{$r5}}</th>
        <th>{{$r5m}}</th>
        <th>{{$r6}}</th>
        <th>{{$r6m}}</th>
        <th>{{$r7}}</th>
        <th>{{$r7m}}</th>
        <th>{{$r8}}</th>
        <th>{{$r8m}}</th>
        <th>{{$r9}}</th>
        <th>{{$r9m}}</th>
        <th>{{$r10}}</th>
        <th>{{$r10m}}</th>
        <th>{{$r11}}</th>
        <th>{{$r11m}}</th>
        <th>{{$totD}}</th>
        <th>{{$totDm}}</th>
        <th>{{$totD+$totDm}}</th>
      </tr>
      <tr>
        <td colspan="2">No Docente</td>
        <td>{{$r1ND}}</td>
        <th>{{$r1NDm}}</th>
        <th>{{$r2ND}}</th>
        <th>{{$r2NDm}}</th>
        <th>{{$r3ND}}</th>
        <th>{{$r3NDm}}</th>
        <th>{{$r4ND}}</th>
        <th>{{$r4NDm}}</th>
        <th>{{$r5ND}}</th>
        <th>{{$r5NDm}}</th>
        <th>{{$r6ND}}</th>
        <th>{{$r6NDm}}</th>
        <th>{{$r7ND}}</th>
        <th>{{$r7NDm}}</th>
        <th>{{$r8ND}}</th>
        <th>{{$r8NDm}}</th>
        <th>{{$r9ND}}</th>
        <th>{{$r9NDm}}</th>
        <th>{{$r10ND}}</th>
        <th>{{$r10NDm}}</th>
        <th>{{$r11ND}}</th>
        <th>{{$r11NDm}}</th>
        <th>{{$totND}}</th>
        <th>{{$totNDm}}</th>
        <th>{{$totND+$totNDm}}</th>
      </tr>
  </table>
</body>
</html>