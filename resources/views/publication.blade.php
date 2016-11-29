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
            <div class="col-sm-4 col-md-6 text-center">
                <img src="{{asset('storage/'.$publication->url_image)}}" alt="{{$publication['title']}}" width="300" height="300">
            </div>
            <div class="col-sm-6 col-sm-offset-2 col-md-5 col-md-offset-1 ">
                <h3>{{$publication->title}}</h3>
                <p>Publisher: {{$publication->owner['name']." ".$publication->owner['lastname']}}</p>
                <p>Category: {{$publication->category['name']}}</p>
                <p>Price: <strong>$ {{$publication['price']}}</strong></p>
                <p>Stock: <strong>{{$publication['stock']}}</strong></p>
                <a href="#" class="btn btn-primary" role="button">Comprar</a>
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