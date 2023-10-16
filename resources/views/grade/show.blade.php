@extends('adminlte::page')


@section('content_header')
<h1><b>{{$subject->namesub}}</b> - {{$detail->initialstage}}{{$detail->nameparallel}} </h1>

@stop
@section('content')
<table style="width: 100%;">
    <tr>
        <td>
            <a href="/teacher/{{$subject->id}}" class="btn btn-flat btn-primary" type="button">
                <i class="fas fa-arrow-left"></i>
                Volver
            </a>
        </td>
        <td align="right">
            <a href="" class="btn btn-flat btn-success" type="button">
                <i class="fas fa-lg fa-save"></i>
                PDF
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
            <a href="/grade/{{$row->student_id}}/{{$row->subject_id}}/{{$row->teacher_id}}" class="btn btn-xs btn-default text-primary mx-1 shadow" >
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </a>

        </td>
    </tr>
    @endforeach
</x-adminlte-datatable>
@stop

