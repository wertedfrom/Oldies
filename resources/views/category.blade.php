@extends('layouts.mainLayout')
@section('title')
    Oldie's | {{$category}}
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