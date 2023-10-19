@extends('adminlte::page')
@section('content')
@section('content_header')
<h4 class="text-center"><b>Crear Usuario Administrativo</b></h4>
@stop
<div class="card card-primary mb-2 card-outline">
    
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
        <div class="form-group">
            <label for="">Cargo</label>
            <select type="text" class="custom-select rounded-0" placeholder="Telefono">
                <option value="">Profesor</option>
                <option value="">Secretario</option>
            </select>
        </div>

    </div>
    <div class="card-footer">
        <button class="btn btn-primary float-right">Guardar</button>
        <a href="/secretaries" class="btn btn-secondary">Cancelar</a>
    </div>
</div>
@stop