<?php
//$productos=[];
//$productos[]=[
//        'url_image' => "./images/bici.jpg",
//        'title' => "bici",
//        'alt' => "bici",
//        'desc'  => "una bici",
//        'price' => "$ 5.00",
//];
//$productos[]=[
//        'url_image' => "./images/camara.jpg",
//        'title' => "camara",
//        'alt' => "camara",
//        'desc'  => "una camara",
//        'price' => "$ 5.00",
//];
//$productos[]=[
//        'url_image' => "./images/camion.jpg",
//        'title' => "camion",
//        'alt' => "camion",
//        'desc'  => "un camion",
//        'price' => "$ 5.00",
//];
//$productos[]=[
//        'url_image' => "./images/coser.jpg",
//        'title' => "maquina de coser",
//        'alt' => "maquina_coser",
//        'desc'  => "una maquina de coser",
//        'price' => "$ 5.00",
//];
//$productos[]=[
//        'url_image' => "./images/toca discos.jpg",
//        'title' => "toca discos",
//        'alt' => "Toca_discos",
//        'desc'  => "un toca discos",
//        'price' => "$ 5.00",
//];
//$publications = \App\Publication::all();
//var_dump($productos);
?>

@extends('layouts.mainLayout')
@section('title')
    Oldie's | Home
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
        <div class="section col-sm-10 col-sm-offset-1">
            @foreach($publications as $producto)
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">--}}
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">--}}
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail text-center" style="padding-bottom: 10px">
                        <a href="{{url("/publication/$producto->id")}}"><img src="{{asset('storage/'.$producto->url_image)}}" width="300" height="300" alt="{{$producto['title']}}"></a>
                        <h3>{{$producto['title']}}</h3>
                        <h4>$ {{$producto['price']}}</h4>
                        <a href="{{url("/publication/$producto->id")}}" class="btn btn-primary" role="button">Ver detalle</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection