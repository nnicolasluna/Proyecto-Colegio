<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Notas</title>
    <table width="100%">
        <tr>
            <td align="center" WIDTH="140"><b>Unidad Educativa</b</td>
            <td rowspan="3" align="right" width="100%"><img height="80" width="70" src="vendor/adminlte/dist/img/logo.jpg"></td>
        </tr>
        <tr>
            <td align="center" WIDTH="140"><b>"Armando Escobar Uria"</b></td>
        </tr>
        <tr>
            <td align="center" WIDTH="140"><b>La Paz - Bolivia</b></td>
        </tr>
    </table>
</head>

<body>
    <h3 align="center">Reporte de Notas</h3>
    <table width=" 100%">
        <tr>
            <td width="270"><b>Profesor:</b>  {{$user->name}}  {{$user->paternal}}   {{$user->maternal}}</td>
        </tr>
        <tr>
            <td><b>Grado:</b>  {{$detail->initialstage}}</td>
            <td align="left"><b>Paralelo:</b>  {{$detail->nameparallel}}</td>
        </tr>
    </table>
    <table width=" 100%" border cellpadding=10 cellspacing=0>
        <tr>
            <td><b>Nombres</b></td>
            <td><b>Apellidos</b></td>
            <td><b>Nota 1</b></td>
            <td><b>Nota 2</b></td>
            <td><b>Nota 3</b></td>
          <!--   <td><b>Nota 4</b></td> -->
            <td><b>Final</b></td>
        </tr>
        @foreach($grades as $row)
        <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->paternal}}   {{$row->maternal}}</td>
            <td>{{$row->grade1}}</td>
            <td>{{$row->grade2}}</td>
            <td>{{$row->grade3}}</td>
            <!-- <td>{{$row->grade4}}</td> -->
            <td>{{$row->gradefinal}}</td>
        </tr>
        @endforeach
    </table>
    </body>

</html>