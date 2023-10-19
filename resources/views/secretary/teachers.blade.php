@extends('adminlte::page')
@section('content_header')
<h1 class="text-center"><b>Administrativos</b></h1>
@stop
@section('content')
<table style="width: 100%;">
    <tr>
        <td style="width: 120px;">
            <a href="/user/new" class="btn btn-block btn-success" type="button">
                <i class="fas fa-solid fa-plus"></i>
                Añadir
            </a>
        </td>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
</table>
@php
$heads = [
['label' => 'Nombre', 'width' => 30],
['label' => 'Apellidos', 'width' => 30],
['label' => 'Carnet', 'width' => 30],
['label' => 'Asignar', 'width' => 10],
];

@endphp

<x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" striped hoverable bordered compressed>
    @foreach($teachers as $row)
    <tr>
        <td>{{$row->name}}</td>
        <td>{{$row->paternal}}{{$row->maternal}}</td>
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
@stop