<?php
//var_dump($producto->description);
?>

@extends('layouts.mainLayout')
@section('title')
    Oldie's | Publication
@endsection
@section('content')
    @include('nav-full')
    <div class="row minimo-pub">
        <div class="section col-md-10 col-md-offset-1">
            <div class="col-md-6 text-center">
                <img src="{{asset('storage/'.$producto->url_image)}}" alt="{{$producto['title']}} width="300" height="300"">
            </div>
            <div class="col-md-5 text-justify">
                <h3>{{$producto->title}}</h3>
                <p>Publisher: {{$producto->owner['name']}}</p>
                <p>Category: {{$producto->category['name']}}</p>
                <p>Price: <strong>$ {{$producto['price']}}</strong></p>
                <a href="#" class="btn btn-primary" role="button">Comprar</a>
                <br>
                <br>
                <p style="word-wrap: break-word;">{{$producto['description']}}</p>
            </div>
        </div>
    </div>
@endsection