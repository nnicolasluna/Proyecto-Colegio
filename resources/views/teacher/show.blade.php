@extends('adminlte::page')
@section('content_header')
<h1></h1>
@stop
@section('content')


<div class="card card-primary">
    <div class="card-header"><b>Materias</b></div>
    <div class="card-body">
        @foreach($parallels as $parallel)
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{$parallel->nameparallel}} {{$parallel->initialstage}}</h3>
                <h7>{{$parallel->namesub}}</h7>

            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <a href="/grade/{{$parallel->subject_id}}/{{$parallel->stage_id}}/{{$parallel->parallel_id}}" class="small-box-footer">
                Ver <i class="fas fa-arrow-circle-right"></i>
                  </a>
        </div>
        @endforeach
    </div>
</div>

@stop