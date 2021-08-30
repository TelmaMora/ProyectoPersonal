<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Personal Docente</title>
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
  <div align="center"><b>Personal Docente</b></div><br>
  <div>Periodo: {{date("m")}}/{{date("Y")}}</div>
  <div><br></div>
  <div align="center"><b>Número de Profesores - Tiempo Completo</b></div><br>
  <table align="center" cellspacing="0" style="font-size: 12px;">
    <thead>
      <tr>
        <th colspan="2">Total de profesores de Tiempo Completo</th>
        <th colspan="2">Licenciatura</th>
        <th colspan="2">Especialidad</th>
        <th colspan="2">Maestría (con grado académico)</th>
        <th colspan="2">Maestría (sin grado académico)</th>
        <th colspan="2">Doctorado (con grado académico)</th>
        <th colspan="2">Doctorado (sin grado académico)</th>
        <th colspan="2">Con Discapacidad</th>
      </tr>
    </thead>
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
      </tr>
      <tr>
        <th>{{count($personalTC)}}</th>
        <th>{{count($personalTCm)}}</th>
        <th>{{count($personalTCLic)}}</th>
        <th>{{count($personalTCLicm)}}</th>
        <th>{{count($personalTCEsp)}}</th>
        <th>{{count($personalTCEspm)}}</th>
        <th>{{count($personalTCMtr)}}</th>
        <th>{{count($personalTCMtrm)}}</th>
        <th>{{count($personalTCMtrsg)}}</th>
        <th>{{count($personalTCMtrsgm)}}</th>
        <th>{{count($personalTCDr)}}</th>
        <th>{{count($personalTCDrm)}}</th>
        <th>{{count($personalTCDrsg)}}</th>
        <th>{{count($personalTCDrsgm)}}</th>
        <th>{{count($personalTCDisc)}}</th>
        <th>{{count($personalTCDiscm)}}</th>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
  </table>

  <div><br></div>
  <div align="center"><b>Número de Profesores - 3/4 de Tiempo</b></div><br>
  <table align="center" cellspacing="0" style="font-size: 12px;">
    <thead>
      <tr>
        <th colspan="2">Total de profesores de 3/4 de Tiempo</th>
        <th colspan="2">Licenciatura</th>
        <th colspan="2">Especialidad</th>
        <th colspan="2">Maestría (con grado académico)</th>
        <th colspan="2">Maestría (sin grado académico)</th>
        <th colspan="2">Doctorado (con grado académico)</th>
        <th colspan="2">Doctorado (sin grado académico)</th>
        <th colspan="2">Con Discapacidad</th>
      </tr>
    </thead>
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
      </tr>
      <tr>
        <th>{{count($personalTCT)}}</th>
        <th>{{count($personalTCTm)}}</th>
        <th>{{count($personalTCTLic)}}</th>
        <th>{{count($personalMTLicm)}}</th>
        <th>{{count($personalTCTEsp)}}</th>
        <th>{{count($personalMTEspm)}}</th>
        <th>{{count($personalTCTMtr)}}</th>
        <th>{{count($personalMTMtrm)}}</th>
        <th>{{count($personalTCTMtrsg)}}</th>
        <th>{{count($personalMTMtrsgm)}}</th>
        <th>{{count($personalTCTDr)}}</th>
        <th>{{count($personalMTDrm)}}</th>
        <th>{{count($personalTCTDrsg)}}</th>
        <th>{{count($personalMTDrsgm)}}</th>
        <th>{{count($personalTCTDisc)}}</th>
        <th>{{count($personalMTDiscm)}}</th>
      </tr>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
  </table>

  <div><br></div>
  <div align="center"><b>Número de Profesores - Medio de Tiempo</b></div><br>
  <table align="center" cellspacing="0" style="font-size: 12px;">
    <thead>
      <tr>
        <th colspan="2">Total de profesores de Medio Tiempo</th>
        <th colspan="2">Licenciatura</th>
        <th colspan="2">Especialidad</th>
        <th colspan="2">Maestría (con grado académico)</th>
        <th colspan="2">Maestría (sin grado académico)</th>
        <th colspan="2">Doctorado (con grado académico)</th>
        <th colspan="2">Doctorado (sin grado académico)</th>
        <th colspan="2">Con Discapacidad</th>
      </tr>
    </thead>
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
      </tr>
      <tr>
        <th>{{count($personalMT)}}</th>
        <th>{{count($personalMTm)}}</th>
        <th>{{count($personalMTLic)}}</th>
        <th>{{count($personalMTLicm)}}</th>
        <th>{{count($personalMTEsp)}}</th>
        <th>{{count($personalMTEspm)}}</th>
        <th>{{count($personalMTMtr)}}</th>
        <th>{{count($personalMTMtrm)}}</th>
        <th>{{count($personalMTMtrsg)}}</th>
        <th>{{count($personalMTMtrsgm)}}</th>
        <th>{{count($personalMTDr)}}</th>
        <th>{{count($personalMTDrm)}}</th>
        <th>{{count($personalMTDrsg)}}</th>
        <th>{{count($personalMTDrsgm)}}</th>
        <th>{{count($personalMTDisc)}}</th>
        <th>{{count($personalMTDiscm)}}</th>
      </tr>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
  </table>

  <div><br></div>
  <div align="center"><b>Número de Profesores - Horas de asignatura</b></div><br>
  <table align="center" cellspacing="0" style="font-size: 12px;">
    <thead>
      <tr>
        <th colspan="2">Total de profesores con Horas de asignatura</th>
        <th colspan="2">Licenciatura</th>
        <th colspan="2">Especialidad</th>
        <th colspan="2">Maestría (con grado académico)</th>
        <th colspan="2">Maestría (sin grado académico)</th>
        <th colspan="2">Doctorado (con grado académico)</th>
        <th colspan="2">Doctorado (sin grado académico)</th>
        <th colspan="2">Con Discapacidad</th>
      </tr>
    </thead>
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
      </tr>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    <tr>
        <th>{{count($personalAsig)}}</th>
        <th>{{count($personalAsigm)}}</th>
        <th>{{count($personalAsigLic)}}</th>
        <th>{{count($personalAsigLicm)}}</th>
        <th>{{count($personalAsigEsp)}}</th>
        <th>{{count($personalAsigEspm)}}</th>
        <th>{{count($personalAsigMtr)}}</th>
        <th>{{count($personalAsigMtrm)}}</th>
        <th>{{count($personalAsigMtrsg)}}</th>
        <th>{{count($personalAsigMtrsgm)}}</th>
        <th>{{count($personalAsigDr)}}</th>
        <th>{{count($personalAsigDrm)}}</th>
        <th>{{count($personalAsigDrsg)}}</th>
        <th>{{count($personalAsigDrsgm)}}</th>
        <th>{{count($personalAsigDisc)}}</th>
        <th>{{count($personalAsigDiscm)}}</th>
      </tr>
  </table>
</body>
</html>       