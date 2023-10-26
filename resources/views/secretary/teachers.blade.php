@extends('adminlte::page')
@section('content_header')
<h1 class="text-center"><b>Panel de Creacion y Edicion</b></h1>
@stop
@section('content')
<div class="btn-group mb-2">
    <a href="/user/new" class="btn btn-success" type="button">
        <i class="fas fa-solid fa-plus"></i>
        Añadir Personal
    </a>
    <a href="/subject/new" class="btn btn-primary" type="button">
        <i class="fas fa-solid fa-plus"></i>
        Crear Asignatura
    </a>
    <a href="/user/new" class="btn btn-info" type="button">
        <i class="fas fa-solid fa-plus"></i>
        Crear Horario
    </a>
</div>

<div class="row">
    <div class="col-12" id="accordion">
        <div class="card card-primary card-outline">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                <div class="card-header">
                    <h4 class="card-title w-100">
                        Lista de Profesores
                    </h4>
                </div>
            </a>
            <div id="collapseOne" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    @section('plugins.Datatables', true)
                    @php
                    $heads = [
                    ['label' => 'Nombre', 'width' => 30],
                    ['label' => 'Apellidos', 'width' => 30],
                    ['label' => 'Carnet', 'width' => 30],
                    ['label' => 'Asignar', 'width' => 10],
                    ];
                    $config['info'] = false;
                    @endphp

                    <x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" :config="$config" striped hoverable bordered compressed>
                        @foreach($teachers as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->paternal}} {{$row->maternal}}</td>
                            <td>{{$row->ci}}</td>

                            <td>
                                <a href="/user/{{$row->id}}" class="btn btn-xs btn-default text-teal mx-1 shadow">
                                    <i class="fa fa-lg fa-fw fa-eye"></i>
                                </a>
                              <!--   <a href="" class="btn btn-xs btn-default text-primary mx-1 shadow">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                </a> -->
                            </td>
                        </tr>
                        @endforeach
                    </x-adminlte-datatable>

                </div>
            </div>
        </div>
        <div class="card card-primary card-outline">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                <div class="card-header">
                    <h4 class="card-title w-100">
                        Lista de Administrativos
                    </h4>
                </div>
            </a>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    @section('plugins.Datatables', true)
                    <x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config" striped hoverable bordered compressed>
                        @foreach($secretaries as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->paternal}} {{$row->maternal}}</td>
                            <td>{{$row->ci}}</td>

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
                    </x-adminlte-datatable>
                </div>
            </div>
        </div>
        <div class="card card-primary card-outline">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                <div class="card-header">
                    <h4 class="card-title w-100">
                        Lista de Asignaturas
                    </h4>
                </div>
            </a>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    @php
                    $heads = [
                    ['label' => 'Nombre Asignatura', 'width' => 30],
                    ['label' => 'Inicial Asignatura', 'width' => 30],

                    ['label' => 'Asignar', 'width' => 10],
                    ];
                    $config['info'] = false;
                    @endphp
                    @section('plugins.Datatables', true)
                    <x-adminlte-datatable id="table3" :heads="$heads" head-theme="dark" :config="$config" striped hoverable bordered compressed>
                        @foreach($subjects as $row)
                        <tr>
                            <td>{{$row->namesub}}</td>
                            <td>{{$row->initialsub}}</td>


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
                    </x-adminlte-datatable>
                </div>
            </div>
        </div>
        <div class="card card-primary card-outline">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                <div class="card-header">
                    <h4 class="card-title w-100">
                        Lista de Usuarios
                    </h4>
                </div>
            </a>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    @php
                    $heads = [
                    ['label' => 'Nombre', 'width' => 30],
                    ['label' => 'Apellidos', 'width' => 30],
                    ['label' => 'Carnet', 'width' => 30],
                    ['label' => 'Asignar', 'width' => 10],
                    ];
                    $config['info'] = false;
                    @endphp
                    @section('plugins.Datatables', true)
                    <x-adminlte-datatable id="table4" :heads="$heads" head-theme="dark" :config="$config" striped hoverable bordered compressed>
                        @foreach($users as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->paternal}} {{$row->maternal}}</td>
                            <td>{{$row->ci}}</td>
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
                    </x-adminlte-datatable>
                </div>
            </div>
        </div>
    </div>
</div>
@stop