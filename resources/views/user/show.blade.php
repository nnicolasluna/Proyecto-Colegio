@extends('adminlte::page')
@section('content')
@section('content_header')
<!-- <h4 class="text-center"><b>Perfil</b></h4> -->
<div class="btn-group mb-2">
    <a href="/user/new" class="btn btn-success" type="button">
        <i class="fas fa-solid fa-plus"></i>
        Asignar Curso
    </a>
    <!--     <a href="/user/new" class="btn btn-primary" type="button">
        <i class="fas fa-solid fa-plus"></i>
        Crear Asignatura
    </a>
    <a href="/user/new" class="btn btn-info" type="button">
        <i class="fas fa-solid fa-plus"></i>
        Crear Horario
    </a> -->
</div>
<div class="callout callout-info">
    <div class="card-body">
        <table width="100%">
            <tr>
                <td style="width: 250px;">
                    <h5><b>Nombre:</b></h5>
                </td>
                <td style="width: 270px;">{{$user->name}} {{$user->paternal}} {{$user->maternal}}</td>
                <td>
                    <h5><b>Correo:</b></h5>
                </td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td>
                    <h5><b>Nro.Carnet</b></h5>
                </td>
                <td>{{$user->ci}}</td>
                <td>
                    <h5><b>Telefono:</b></h5>
                </td>
                <td>{{$user->phone}}</td>
            </tr>
        </table>
    </div>
</div>
<div class="card card-primary">
    <div class="card-body">
        @section('plugins.Datatables', true)
        @php
        $heads = [

        ['label' => 'Grado', 'width' => 30],
        ['label' => 'Paralelo', 'width' => 30],
        ['label' => 'Asignar', 'width' => 10],
        ];
        $config['info'] = false;
        @endphp

        <x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" :config="$config" striped hoverable bordered compressed>
            @if($teachers!=null)
            @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher->initialstage}}</td>
                <td>{{$teacher->nameparallel}}</td>
                <td>
                    <a href="" class="btn btn-xs btn-default text-teal mx-1 shadow">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </a>
                    <a href="" class="btn btn-xs btn-default text-primary mx-1 shadow">
                        <i class="fa fa-lg fa-fw fa-pen"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            @else
            <tr> Sin datos</tr>
            @endif

        </x-adminlte-datatable>



    </div>
</div>
@stop