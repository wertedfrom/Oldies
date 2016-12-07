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
    <div class="row">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000" >
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/auto.png" style="width: 100%">
            <div class="carousel-caption" >
      	     <h1>UN ESPACIO DONDE COMPRAR</h1>
           </div>
         </div>
         <div class="item">
           <img src="images/maguina.png" style="width: 100%">
           <div class="carousel-caption">
      	    <h1>UN ESPACIO DONDE VENDER</h1>
          </div>
        </div>
        <div class="item">
          <img src="images/bici.png" style="width: 100%">
          <div class="carousel-caption">
      	   <h1>DONDE ESTA LO QUE TE GUSTA</h1>
         </div>
        </div>
      </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div> <!-- Carousel -->
    </div>
    <div class="row">
        <div class="section col-sm-10 col-sm-offset-1">
            @foreach($publications as $publication)
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">--}}
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">--}}
                <div class="col-xs-12 col-sm-4 col-md-3 ajuste">
                    <div class="thumbnail text-center" style="padding-bottom: 10px">
                        <a href="{{url("/publication/$publication->id")}}"><img src="{{asset('storage/'.$publication->url_image)}}" alt="{{$publication['title']}}" style="height:210px;"></a>
                        <h3 class="title">{{$publication['title']}}</h3>
                        <h4>$ {{$publication['price']}}</h4>
                        <a href="{{url("/publication/$publication->id")}}" class="btn btn-primary" role="button">Ver detalle</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
