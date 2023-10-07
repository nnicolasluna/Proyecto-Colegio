@extends('adminlte::page')
@section('content_header')

<h1><b>BIENVENIDO </b>"{{$user->name}}"</h1>
@stop
@section('content')
<app-admin-lte3-perfil class="ng-star-inserted">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <h5><b>ARMANDO ESCOBAR URIA</b></h5>
                        <h6>UNIDAD Educativa</h5>
                        <img class="img-fluid img-circle" src="vendor/adminlte/dist/img/logo.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-primary">
                <div class="card-header">
                    <b>Nuestra Misión</b>
                </div>
                <div class="card-body">
                    La Unidad Educativa “ARMANDO ESCOBAR URIA” tiene como misión: “Elevar la calidad
                    educativa formando estudiantes íntegros, responsables, participativos y activos con capacidad
                    reflexiva, crítica y productiva, además de conocimientos científicos, tecnológicos y altos valores
                    humanos para enfrentar los desafíos de la vida”.
                </div>
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <b>Nuestra Visión</b>
                </div>
                <div class="card-body">
                    La Unidad Educativa “ARMANDO ESCOBAR URIA B” tiene como visión: “Fortalecer el
                    ambiente institucional de calidad, con personal docente capacitado y comprometido con el
                    Modelo Educativo Socio comunitario Productivo, sobre la base de un currículo innovador e
                    integrado que responda a las necesidades de la vida práctica de la comunidad, donde las y los
                    estudiantes amplíen sus conocimientos con alta identidad cultural y autoestima”.
                </div>
            </div>
        </div>
</app-admin-lte3-perfil>


@stop