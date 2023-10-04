@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1></h1>
@stop
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h2>Notas</h2>
    </div>
    <div class="card-body">
        @section('plugins.Datatables', true)
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Materia</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Nota 4</th>
                    <th>Nota Final</th>
                </tr>
            </thead>
            <tbody>
                @foreach($grades as $grade)
                <tr>
                    <td>{{ $grade->namesub}}</td>
                    <td>{{ $grade->grade1}}</td>
                    <td>{{ $grade->grade2}}</td>
                    <td>{{ $grade->grade3}}</td>
                    <td>{{ $grade->grade4}}</td>
                    <td>{{ $grade->gradefinal}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @stop
    </div>
</div>

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example', {
        paging: false,
        searching: false,
        info: false,
        ordering: false
    });
</script>
@stop