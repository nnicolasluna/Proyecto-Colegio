@extends('adminlte::page')


@section('content_header')
<h1><b>{{$subject->namesub}}</b>   -   {{$detail->initialstage}}{{$detail->nameparallel}} </h1>

@stop
@section('content')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)
@php
$heads = [
['label' => 'Nombre', 'width' => 30],
['label' => 'Apellidos', 'width' => 30],
['label' => 'Nota 1', 'width' => 7],
['label' => 'Nota 2', 'width' => 7],
['label' => 'Nota 3', 'width' => 7],
['label' => 'Nota 4', 'width' => 7],
['label' => 'Final', 'width' => 7],
['label' => 'Editar', 'width' => 10],
];
$config['paging'] = false;
$config['info'] = false;
$config['searching'] = false;
$config['ordering'] = false;
$config['lengthChange'] = false;
//$config['dom'] = 'lfrtip';
@endphp
<x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" :config="$config" striped hoverable bordered compressed with-buttons>
    @foreach($grades as $row)
    <tr>
        <td>{{$row->name}}</td>
        <td>{{$row->paternal}}{{$row->maternal}}</td>
        <td>{{$row->grade1}}</td>
        <td>{{$row->grade2}}</td>
        <td>{{$row->grade3}}</td>
        <td>{{$row->grade4}}</td>
        <td>{{$row->gradefinal}}</td>
        <td>
            <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>
        </td>
    </tr>
    @endforeach
</x-adminlte-datatable>

@stop
@section('js')
<script>
    new DataTable('#table1', {
        paging: false,
        searching: false,
        info: false,
        ordering: false,
       
    });
</script>
@stop