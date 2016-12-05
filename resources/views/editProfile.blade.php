<?php
$genders = ["Masculino", "Femenino", "Trans", "Otro"];
var_dump($genders);
var_dump(old('gender'));
var_dump($user->gender);
if(old('gender')){
    $new_gender = old('gender');
}else{
    $new_gender = $user->gender;
}
//exit;
?>
@extends('layouts.mainLayout')
@section('title')
    Oldie's | Edit Profile
@endsection
@section('content')
    @include('nav-profile')
    <div class="row minimo">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
            <form class="form-horizontal" role="form" method="POST" action="/updateProfile/{{$user->id}}">
                {{ csrf_field() }}

                <h1>Modifica tus datos</h1>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Nombre: </label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="@if(old('name')){{old('name')}}@else{{ $user->name}}@endif" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <label for="lastname" class="col-md-4 control-label">Apellido: </label>

                    <div class="col-md-6">
                        <input id="lastname" type="text" class="form-control" name="lastname" value="@if(old('lastname')){{old('lastname')}}@else{{ $user->lastname}}@endif" required autofocus>

                        @if ($errors->has('lastname'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="phone" class="col-md-4 control-label">Telefono: </label>

                    <div class="col-md-6">
                        <input id="phone" type="text" class="form-control" name="phone" value="@if(old('phone')){{old('phone')}}@else{{ $user->phone}}@endif" required autofocus>

                        @if ($errors->has('phone'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                    <label for="gender" class="col-md-4 control-label">Sexo: </label>
                    <div class="col-md-6">
                        <select class="form-control" name="gender" id="gender">
                            <option value="gender" disabled="disabled" selected="selected">Elija su sexo</option>
                            @foreach ($genders as $gender)
                                <option value="{{$gender}}"
                                        @if($new_gender == $gender) selected
                                        @endif
                                        >{{$gender}}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('gender'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                    <label for="phone" class="col-md-4 control-label">Fecha de nacimiento: </label>

                    <div class="col-md-6">
                        <input id="birthdate" type="date" class="form-control" name="birthdate" value="@if(old('birthdate')){{old('birthdate')}}@else{{ $user->birthdate}}@endif" required autofocus>

                        @if ($errors->has('birthdate'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Modificar mis datos
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
