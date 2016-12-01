@extends('layouts.mainLayout')
@section('title')
    Oldie's | {{$category}}
@endsection
@section('content')
    @include('nav-full')
    <div class="row minimo-pub">
        <div class="section col-md-10 col-md-offset-1">
            @forelse($publications as $publication)
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">--}}
                {{--<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">--}}
                <div class="col-xs-6 col-sm-4 col-md-3 ajuste">
                    <div class="thumbnail text-center" style="padding-bottom: 10px">
                        <img src="{{asset('storage/'.$publication->url_image)}}" alt="{{$publication['title']}}" style="height:300; width:300;">
                        <h3 class="title">{{$publication['title']}}</h3>
                        <h4>$ {{$publication['price']}}</h4>
                    </div>
                </div>
            @empty
                <div class="col-md-8 col-md-offset-2">
                    <section><h1>There are no publications for this category</h1></section>
                </div>
            @endforelse
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                {{$publications->appends(request()->all())->links()}}
            </div>
        </div>
    </div>
@endsection
