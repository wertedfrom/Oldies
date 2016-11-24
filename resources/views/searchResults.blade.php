@extends('layouts.mainLayout')
@section('title')
    Oldie's | Resultado de búsqueda
@endsection
@section('content')
    @include('nav-full')
    <div class="row minimo-pub">
        <div class="section col-md-10 col-md-offset-1">
            @forelse($publications as $producto)
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">--}}
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">--}}
                <div class="col-md-3">
                    <div class="thumbnail text-center" style="padding-bottom: 10px">
                        <img src="{{asset('storage/'.$producto->url_image)}}" alt="{{$producto['title']}}" style="height:300; width:300;">
                        <h3>{{$producto['title']}}</h3>
                        <h4>$ {{$producto['price']}}</h4>
                        <a href="{{url("/publication/$producto->id")}}" class="btn btn-primary" role="button">Visitar</a>
                        <a href="{{url("/publication/$producto->id")}}" class="btn btn-default" role="button">Comprar</a>
                    </div>
                </div>
            @empty
                <div class="col-md-8 col-md-offset-2">
                    <section><h1>There are no results for this search</h1></section>
                </div>
            @endforelse
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            {{$publications->appends(request()->all())->links()}}
            </div>
        </div>
    </div>
@endsection
