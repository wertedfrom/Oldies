<?php
//$producto=[
//        'url_image' => "./images/toca discos.jpg",
//        'title' => "toca discos",
//        'alt' => "Toca_discos",
//        'desc'  => "un toca discos ipse Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
//        'price' => "$ 5.00",
//];
//$producto = \App\Publication::find(2);
//var_dump($producto->Category());
//exit;
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
                <img src="{{url($producto['url_image'])}}" alt="{{$producto['title']}}">
            </div>
            <div class="col-md-5">
                <h3>{{$producto->title}}</h3>
                <p>Publisher: {{$producto->owner['name']}}</p>
                <p>Category: {{$producto->category['name']}}</p>
                <p>Price: <strong>$ {{$producto['price']}}</strong></p>
                <a href="#" class="btn btn-primary" role="button">Comprar</a>
                <br>
                <br>
                <p>{{$producto['description']}}</p>
            </div>
        </div>
    </div>
@endsection