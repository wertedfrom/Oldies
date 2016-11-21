@extends('layouts.mainLayout')
@section('title')
    Oldie's | Resultado
@endsection
@section('content')
    @include('nav-full')
    <div class="row minimo-pub">
        <div class="section col-md-10 col-md-offset-1">
            @foreach($publications as $producto)
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">--}}
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">--}}
                <div class="col-md-3">
                    <div class="thumbnail text-center" style="padding-bottom: 10px">
                        <img src="{{url($producto['url_image'])}}" alt="{{$producto['title']}}">
                            <h3>{{$producto['title']}}</h3>
                            <h4>$ {{$producto['price']}}</h4>
                        <a href="{{url("/publication/$producto->id")}}" class="btn btn-primary" role="button">Visitar</a>
                        <a href="{{url("/publication/$producto->id")}}" class="btn btn-default" role="button">Comprar</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
