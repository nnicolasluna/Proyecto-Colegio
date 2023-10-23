@extends('adminlte::page')
@section('content')
@section('content_header')
<h4 class="text-center"><b>Crear Usuario Administrativo</b></h4>
@stop
<form action="/user/new" method="POST">
    @csrf()
    <div class="card card-primary mb-2 card-outline">
        <div class="card-body">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control form-control-sm" name="name" placeholder="Nombres">
            </div>
            <div class="form-group">
                <label for="">Apellido Paterno</label>
                <input type="text" class="form-control form-control-sm" name="paternal" placeholder="Apellido Paterno">
            </div>
            <div class="form-group">
                <label for="">Apellido Materno</label>
                <input type="text" class="form-control form-control-sm" name="maternal" placeholder="Apellido Materno">
            </div>
            <div class="form-group">
                <label for="">Carnet de Identidad</label>
                <input type="text" class="form-control form-control-sm" name="ci" placeholder="Carnet de Identidad">
            </div>
            <div class="form-group">
                <label for="">Genero</label>
                <input type="text" class="form-control form-control-sm" name="gender" placeholder="Genero">
            </div>
            <div class="form-group">
                <label for="">Telefono</label>
                <input type="text" class="form-control form-control-sm" name="phone" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label for="">Fecha de Nacimiento</label>
                <input type="date" name="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" placeholder="dd/mm/yyyy">
            </div>
       <!--      <div class="form-group">
                <label for="">Cargo</label>
                <select type="text" class="custom-select rounded-0" placeholder="Telefono">
                    <option value="">Profesor</option>
                    <option value="">Secretario</option>
                </select>
            </div> -->

        </div>
        <div class="card-footer">
            <button class="btn btn-primary float-right" type="submit">Guardar</button>
            <a href="/secretary/teachers" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</form>
@stop