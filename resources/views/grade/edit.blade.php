@extends('adminlte::page')
@section('content_header')
<h1></h1>
@stop
@section('content')
<div class="mb-2">
    <a href="" class="btn btn-flat btn-primary -m2" type="button">
        <i class="fas fa-arrow-left"></i>
        Volver
    </a>
</div>
<app-admin-lte3-perfil class="ng-star-inserted">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary">
                <div class="card-header"><b>Datos del Estudiante</b></b></div>
                <div class="card-body box-profile">
                    <div class="text-center">
                        <table width="100%">
                            <tr>
                                <td align="left"><b>Nombre:</b></td>
                                <td align="left">{{ $student->name}}</td>
                            </tr>
                            <tr>
                                <td align="left"><b>Apellidos:</b></td>
                                <td align="left">{{ $student->paternal}} {{$student->maternal}}</td>
                            </tr>
                            <tr>
                                <td align="left"><b>CI:</b></td>
                                <td align="left">{{ $student->ci}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-primary">
                <div class="card-header" align="center"><b>Notas</b></b></div>
                <div class="card-body">

                    <form action="{{route('grade.update',$grades->id)}}" method="POST">
                        <table width="100%">
                            @csrf()
                            @method('PUT')
                            <tr>
                                <td width="200">Primera Nota:</td>
                                <td>
                                    <input type="text" style="width: 500px;" name="grade1" value="{{ old('grade1',$grades->grade1)}}">
                                </td>
                            </tr>
                            <tr>
                                <td>Segunda Nota:</td>
                                <td>
                                    <input type="text" style="width: 500px;" name="grade2" value="{{ old('grade2',$grades->grade2)}}">
                                </td>
                            </tr>
                            <tr>
                                <td>Tecera Nota:</td>
                                <td>
                                    <input type="text" style="width: 500px;" name="grade3" value="{{ old('grade3',$grades->grade3)}}">
                                </td>
                            </tr>
                          
                            <tr>
                                <td>Nota Final:</td>
                                <td>
                                    {{ $grades->gradefinal}}
                                </td>
                            </tr>
                        </table>
                        <div class="d-flex justify-content-end mb-2">
                            <button class="btn btn-flat btn-primary" type="Submit">Guardar</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="card card-success">


            </div>

        </div>
    </div>
</app-admin-lte3-perfil>



@stop