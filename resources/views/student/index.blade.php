@extends('adminlte::page')
@section('content_header')

<h1><b>BIENVENIDO   </b>"{{$user->name}}"</h1>
@stop
@section('content')
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

@stop