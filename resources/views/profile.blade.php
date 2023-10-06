@extends('adminlte::page')
@section('content_header')
<h1></h1>
@stop
@section('content')
<app-admin-lte3-perfil class="ng-star-inserted">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <!-- <img class="profile-user-img -img-fluid img-circle">-->
                        <h3>{{$user->name}}</h3>
                        <h4>{{$user->paternal}} {{$user->maternal}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-primary">
                <div class="card-header"><b>Datos del Usuario</b></b></div>
                <div class="card-body">
                    <table width="100%">
                        <tr>
                            <td style="margin-right: 500px,margin-left 200px;" width="30%"><b>Nombre:</b></td>
                            <td style="text-align: right;"width="70%">{{ $user->name}}</td>
                        </tr>
                        <tr>
                            <td style="margin-right: 500px;"><b>Apellidos:</b></td>
                            <td style="text-align: right;">{{ $user->paternal}} {{$user->maternal}}</td>
                        </tr>
                        <tr>
                            <td style="margin-right: 500px;"><b>Correo:</b></td>
                            <td style="text-align: right;">{{ $user->email}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <app-admin-lte3-cambiar-contraseia>
                <div class="card card-success">
                    <div class="card-header"><b>Cambiar Contraseña</b></div>
                    <div class="card-body">
                        @include('profile.partials.update-password-form')
                    </div>

                </div>
            </app-admin-lte3-cambiar-contraseia>
        </div>
    </div>
</app-admin-lte3-perfil>



@stop