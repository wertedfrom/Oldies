<?php
$productos=[];
$productos[]=[
        'url_image' => "./images/bici.jpg",
        'title' => "bici",
        'alt' => "bici",
        'desc'  => "una bici",
        'price' => "$ 5.00",
];
$productos[]=[
        'url_image' => "./images/camara.jpg",
        'title' => "camara",
        'alt' => "camara",
        'desc'  => "una camara",
        'price' => "$ 5.00",
];
$productos[]=[
        'url_image' => "./images/camion.jpg",
        'title' => "camion",
        'alt' => "camion",
        'desc'  => "un camion",
        'price' => "$ 5.00",
];
$productos[]=[
        'url_image' => "./images/coser.jpg",
        'title' => "maquina de coser",
        'alt' => "maquina_coser",
        'desc'  => "una maquina de coser",
        'price' => "$ 5.00",
];
$productos[]=[
        'url_image' => "./images/toca discos.jpg",
        'title' => "toca discos",
        'alt' => "Toca_discos",
        'desc'  => "un toca discos",
        'price' => "$ 5.00",
];
//var_dump($productos);
?>

@extends('layouts.mainLayout')
@section('title')
    Oldie's Home
@endsection
@section('content')
    @include('nav-full')
    {{--<div class="row">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-12 visible-xs">--}}

    {{--<div class="navigator col-xs-12 visible-xs">--}}
    {{--<ul class="nav nav-tabs">--}}
    {{--<li role="presentation" class="dropdown">--}}
    {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Categories <span class="caret"></span></a>--}}
    {{--<ul class="dropdown-menu">--}}
    {{--<li><a href="#">Destacados</a></li>--}}
    {{--<li><a href="#">Electro</a></li>--}}
    {{--<li><a href="#">Muebles</a></li>--}}
    {{--<li><a href="#">Deco</a></li>--}}
    {{--<li><a href="#">Juguetes</a></li>--}}
    {{--</ul>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs">--}}
    {{--<div class="navigator col-sm-12 col-md-12 col-lg-12 hidden-xs">--}}

    {{--<ul class="nav nav-tabs">--}}
    {{--<li role="presentation" class="active"><a href="#">Destacados</a></li>--}}
    {{--<li role="presentation"><a href="#">Electro</a></li>--}}
    {{--<li role="presentation"><a href="#">Muebles</a></li>--}}
    {{--<li role="presentation"><a href="#">Deco</a></li>--}}
    {{--<li role="presentation"><a href="#">Juguetes</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="row">
        <div class="section col-md-10 col-md-offset-1">
            @foreach($productos as $producto)
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">--}}
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">--}}
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="{{$producto['url_image']}}" alt={{$producto['alt']}}">
                    <div class="caption">
                        <h3>{{$producto['title']}}</h3>
                        <p>{{$producto['desc']}}</p>
                        <p>{{$producto['price']}}</p>
                        <p><a href="#" class="btn btn-primary" role="button">Visitar</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
                    </div>
                </div>
        </div>
        {{--</div>--}}
        @endforeach
        {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">--}}
        {{--<img src="./images/camara.jpg" alt="camara" class="img-responsive img-thumbnail"/>--}}
        {{--</div>--}}
        {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">--}}
        {{--<img src="./images/camion.jpg" alt="camion" class="img-responsive img-thumbnail"/>--}}
        {{--</div>--}}
        {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">--}}
        {{--<img src="./images/coser.jpg" alt="maquina_coser" class="img-responsive img-thumbnail"/>--}}
        {{--</div>--}}
        {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">--}}
        {{--<img src="./images/toca discos.jpg" alt="toca_discos" class="img-responsive img-thumbnail"/>--}}
        {{--</div>--}}

    </div>
    @include('footer')
    </div>
@endsection