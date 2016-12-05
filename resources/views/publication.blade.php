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
        <div class="section col-sm-10 col-sm-offset-1">
            <div class="col-sm-6 col-md-5 text-center">
                <img src="{{asset('storage/'.$publication->url_image)}}" alt="{{$publication['title']}}" width="300px" height="300px">
            </div>
            <div class="col-sm-6 col-md-6 col-md-offset-1 ">
                <h3>{{$publication->title}}</h3>
                <p>Vendedor: {{$publication->owner['name']." ".$publication->owner['lastname']}}</p>
                <p>Categoría: {{$publication->category['name']}}</p>
                <p>Precio: <strong>$ {{$publication['price']}}</strong></p>
                <p>Stock: <strong>{{$publication['stock']}}</strong></p>
                <input style="width: 50px" type="number" name="quantity" value="1" max="{{$publication['stock']}}" min="1">
                <a href="#" class="btn btn-primary" role="button">Agregar al Carrito</a>
                <br>
                <br>
                <p style="word-wrap: break-word;">{{$publication['description']}}</p>
                {{--@if(Auth::id()==$publication->user_id)--}}
                    {{--<a href="/publications/{{$publication['id']}}/edit">Editar</a>--}}
                {{--@endif--}}
            </div>
        </div>
    </div>
@endsection
