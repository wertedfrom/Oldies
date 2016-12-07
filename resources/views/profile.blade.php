@extends('layouts.mainLayout')
@section('title')
    Oldie's | Profile
@endsection
@section('content')
    @include('nav-profile')
    <div class="row minimo-pub">
        <div class="section col-xs-12 col-sm-10 col-sm-offset-1">
            <h1>Mi perfil</h1>
            <div class="col-xs-12 col-sm-5 col-md-6 text-center">
                <div class="row">
                    <div>
                        <img src="{{asset('storage/'.Auth::user()->url_image)}}" style="width:100%;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <a href="{{url('editAvatar')}}" class="btn btn-primary">Cambiar foto de perfil</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-1 col-md-5 col-md-offset-1">
                <h3>{{Auth::user()->name." ".Auth::user()->lastname}}</h3>
                <p>Email: <strong>{{Auth::user()->email}}</strong></p>
                <p>Teléfono: {{Auth::user()->phone}}</p>
                <p>Sexo: {{Auth::user()->gender}}</p>
                <p>Fecha de nacimiento: {{Auth::user()->birthdate}}</p>
                <a href="{{url('editProfile')}}" class="btn btn-primary">Editar información de perfil</a>
            </div>
        </div>
    </div>
@endsection