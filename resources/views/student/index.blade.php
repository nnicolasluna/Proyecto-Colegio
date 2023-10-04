@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')

<h1>Horario</h1>
@stop
@section('content')
<div class="card">
    <div class="card-body">
        @section('plugins.Datatables', true)
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Hora</th>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miercoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align: center">8</th>
                    <td style="text-align: center"></td>
                    <td style="text-align: center"></td>
                    <td style="text-align: center"></td>
                    <td style="text-align: center"></td>
                    <td style="text-align: center"></td>
                </tr>
               
            </tbody>

        </table>
    </div>
</div>


@stop
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
        "columnDefs": [{
            "searchable": false,
            "targets": 0
        }]
    });
</script>

@stop