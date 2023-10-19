@extends('adminlte::page')
@section('content_header')
<h1>Profesores</h1>
@stop
@section('content')
<table style="width: 100%;">
    <tr>
        <td>
            <a href="" class="btn btn-flat btn-primary" type="button">
                <i class="fas fa-arrow-left"></i>
                Volver
            </a>
        </td>
        <td align="right">
            <a href="/user/new" class="btn btn-flat btn-success" type="button">
                <i class="fas fa-solid fa-plus"></i>
                Añadir
            </a>
        </td>
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
@section('plugins.Datatables', true)
<x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" striped hoverable bordered compressed>
    @foreach($teachers as $row)
    <tr>
        <td>{{$row->name}}</td>
        <td>{{$row->paternal}}{{$row->maternal}}</td>
        <td>{{$row->ci}}</td>

        <td>
            <a href="" class="btn btn-xs btn-default text-primary mx-1 shadow">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </a>

        </td>
    </tr>
    @endforeach
</x-adminlte-datatable>
@stop