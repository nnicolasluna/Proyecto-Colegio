@extends('adminlte::page')
@section('content_header')
<h1></h1>
@stop
@section('content')
<app-admin-lte3-perfil class="ng-star-inserted">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary">
                <div class="card-header"><b>Datos del Usuario</b></b></div>
                <div class="card-body box-profile">
                    <div class="text-center">
                        <table width="100%">
                            <tr>
                                <td><b>Nombre:</b></td>
                                <td>{{ $student->name}}</td>
                            </tr>
                            <tr>
                                <td><b>Apellidos:</b></td>
                                <td>{{ $student->paternal}} {{$student->maternal}}</td>
                            </tr>
                            <tr>
                                <td><b>CI:</b></td>
                                <td>{{ $student->ci}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-primary">
                <div class="card-header"><b>Notas</b></b></div>
                <div class="card-body">
                    <table width="100%">
                        <form action="" method="POST">
                            @csrf()
                            @method('PUT')
                            <tr>
                                <td>Primera Nota:</td>
                                <td>
                                    <input type="text" name="grade1" value="{{ old('grade1',$grades->grade1)}}">
                                </td>
                            </tr>
                            <tr>
                                <td>Segunda Nota:</td>
                                <td>
                                    <input type="text" name="grade2" value="{{ old('grade2',$grades->grade2)}}">
                                </td>
                            </tr>
                            <tr>
                                <td>Tecera Nota:</td>
                                <td>
                                    <input type="text" name="grade3" value="{{ old('grade3',$grades->grade3)}}">
                                </td>
                            </tr>
                            <tr>
                                <td>Cuarta Nota:</td>
                                <td>
                                    <input type="text" name="grade1" value="{{ old('grade4',$grades->grade4)}}">
                                </td>
                            </tr>
                            <tr>
                                <td>Nota Final:</td>
                                <td>
                                    <input type="text" name="gradefinal" value="{{ old('gradefinal',$grades->gradefinal)}}">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>

            <div class="card card-success">


            </div>

        </div>
    </div>
</app-admin-lte3-perfil>



@stop