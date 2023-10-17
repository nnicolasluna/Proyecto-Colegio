<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Notas</title>
    <table>
        <tr>
            <td align="center"><b>Unidad Educativa</b</td>
        </tr>
        <tr>
            <td align="center"><b>"Armando Escobar Uria"</b></td>
        </tr>
        <tr>
            <td align="center"><b>La Paz - Bolivia</b></td>
        </tr>
    </table>
</head>

<body>
    <h3 align="center">Reporte de Notas</h3>
    <table width=" 100%" border cellpadding=10 cellspacing=0>
        <tr>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>Nota 1</td>
            <td>Nota 2</td>
            <td>Nota 3</td>
            <td>Nota 4</td>
            <td>Final</td>
        </tr>
        @foreach($grades as $row)
        <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->paternal}}{{$row->maternal}}</td>
            <td>{{$row->grade1}}</td>
            <td>{{$row->grade2}}</td>
            <td>{{$row->grade3}}</td>
            <td>{{$row->grade4}}</td>
            <td>{{$row->gradefinal}}</td>
        </tr>
        @endforeach
    </table>
    </body>

</html>