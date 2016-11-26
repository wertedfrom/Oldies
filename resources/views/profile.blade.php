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
                <img src="{{asset('storage/'.'images/no-image.jpg')}}" width="300" height="300">
            </div>
            <div class="col-sm-6 col-sm-offset-2 col-md-5 col-md-offset-1 ">
                <h3>{{Auth::user()->id}}</h3>
                <p>Publisher: {{Auth::user()->name}}</p>
                {{--<p>Category: {{$producto->category['name']}}</p>--}}
                {{--<p>Price: <strong>$ {{$producto['price']}}</strong></p>--}}
                {{--<a href="#" class="btn btn-primary" role="button">Comprar</a>--}}
                {{--<br>--}}
                {{--<br>--}}
                {{--<p style="word-wrap: break-word;">{{$producto['description']}}</p>--}}
            </div>
        </div>
    </div>
@endsection