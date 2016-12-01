<?php
//var_dump($producto->description);
?>

@extends('layouts.mainLayout')
@section('title')
    Oldie's | Profile
@endsection
@section('content')
    @include('nav-profile')
    <div class="row minimo-pub">
        <div class="section col-sm-10 col-sm-offset-1">
            <div class="col-sm-4 col-md-6 text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{asset('storage/'.'images/no-image.jpg')}}" width="300" height="300">
                    </div>
                    <div class="col-sm-12">
                        <a href="#" class="btn btn-primary">Cambiar foto de perfil</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-2 col-md-5 col-md-offset-1 ">
                <h3>{{Auth::user()->name." ".Auth::user()->lastname}}</h3>
                <p>Email: <strong>{{Auth::user()->email}}</strong></p>
                <p>Teléfono: {{Auth::user()->phone}}</p>
                <p>Sexo: {{Auth::user()->gender}}</p>
                <p>Fecha de nacimiento: {{Auth::user()->birthdate}}</p>
                <a href="#" class="btn btn-primary">Editar información de perfil</a>
            </div>
        </div>
    </div>
@endsection