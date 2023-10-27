@extends('adminlte::page')
@section('content')
@section('content_header')
<h4 class="text-center"><b>Crear Usuario Administrativo</b></h4>
@stop
<form action="/subject/new" method="POST">
    @csrf()
    <div class="card card-primary mb-2 card-outline">
        <div class="card-body">
            <div class="form-group">
                <label for="">Nombre del Periodo</label>
                <input type="text" class="form-control form-control-sm" name="namesub" placeholder="Nombre del Materia">
            </div>
            <div class="form-group">
                <label for="">Inicio del Periodo</label>
                <input type="time" class="form-control form-control-sm" name="initialsub" placeholder="Inicial de la Materia">
            </div>
            <div class="form-group">
                <label for="">Fin del Periodo</label>
                <input type="time" class="form-control form-control-sm" name="initialsub" placeholder="Inicial de la Materia">
            </div>
            <div class="form-group">
                <label for="">Dia</label>
                <input type="text" class="form-control form-control-sm" name="initialsub" placeholder="Inicial de la Materia">
            </div>
            <div class="form-group">
                <label for="">Dia abreviado</label>
                <input type="text" class="form-control form-control-sm" name="initialsub" placeholder="Inicial de la Materia">
            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-primary float-right" type="submit">Guardar</button>
            <a href="/secretary/teachers" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</form>
@stop