<?php
//var_dump($producto->description);
//var_dump($user);
?>

@extends('layouts.mainLayout')
@section('title')
    Oldie's | Edit Avatar
@endsection
@section('content')
    @include('nav-profile')
    <div class="row minimo-pub">
        <div class="section col-sm-10 col-sm-offset-1">
            <h1>Cambia tu foto de perfil!</h1>
            <div class="col-sm-4 col-md-6 text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{asset('storage/'.$user->url_image)}}" width="300" height="300">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-0">
                <form class="form-horizontal" action="/updateAvatar/{{$user->id}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <div class="form-group @if($errors->has('avatar')) has-error @else @endif">

                    <label class="control-label col-md-4" for="cover">Cambiar avatar: </label>
                    <div class="col-md-6 text-left">
                        <input value="{{ old('avatar') }}" class="form-control" type="file" name="avatar" placeholder="Archivo">
                        {{--<div class="fileUpload btn btn-success" style="margin-left:0; width:100%;">--}}
                        {{--<span>Examinar...</span>--}}
                        {{--<input type="file" class="form-control upload name="cover" />--}}
                        {{--</div>--}}
                        @if($errors->has('avatar'))
                            @foreach($errors->get('avatar') as $error)
                                <span class="text-danger">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        {{--<button type="submit" class="btn btn-primary center-block" style="font-size:20px;">Ingresar</button>--}}
                        <button type="submit" class="btn btn-primary">Modificar foto de perfil</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection