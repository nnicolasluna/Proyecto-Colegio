@extends('adminlte::page')

@section('content')

<div class="card card-primary mb-2">
    <div class="card-header">
        <b>Crear Usuario Administrativo</b>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control form-control-sm" placeholder="Nombres">
        </div>
        <div class="form-group">
            <label for="">Apellido Paterno</label>
            <input type="text" class="form-control form-control-sm" placeholder="Apellido Paterno">
        </div>
        <div class="form-group">
            <label for="">Apellido Materno</label>
            <input type="text" class="form-control form-control-sm" placeholder="Apellido Materno">
        </div>
        <div class="form-group">
            <label for="">Carnet de Identidad</label>
            <input type="text" class="form-control form-control-sm" placeholder="Carnet de Identidad">
        </div>
        <div class="form-group">
            <label for="">Genero</label>
            <input type="text" class="form-control form-control-sm" placeholder="Genero">
        </div>
        <div class="form-group">
            <label for="">Telefono</label>
            <input type="text" class="form-control form-control-sm" placeholder="Telefono">
        </div>

    </div>
    <div class="card-footer">
        <button class="btn btn-primary float-right">Guardar</button>
        <a href="/secretaries" class="btn btn-secondary">Cancelar</a>
    </div>
</div>
@stop