@extends('layouts.mainLayout')
@section('title')
Oldie's | My Publications
@endsection
@section('content')
@include('nav-profile')
<div class="row minimo-pub">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center">Mis Publicaciones</h1>
        @include('searchInMyPublications')
        <div class="row">
            <div class="col-xs-12" style="min-height: 280px;">
        <table class="table table-hover table-responsive text-center">
            <thead>
            <tr>
                <td></td>
                <td><strong>Title</strong></td>
                <td><strong>Stock</strong></td>
                <td><strong>Price</strong></td>
                <td><strong>Categorie</strong></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @forelse($publications as $publication)
            <tr>
                <td style="vertical-align: middle;"><img src="{{asset('storage/'.$publication->url_image)}}" alt="{{$publication['title']}}" style="max-height: 50px;"></td>
                <td style="vertical-align: middle;"><a href="{{url("/publication/$publication->id")}}">{{$publication->title}}</a></td>
                <td style="vertical-align: middle;">{{$publication->stock}}</td>
                <td style="vertical-align: middle;">{{$publication->price}}</td>
                <td style="vertical-align: middle;">{{$publication->category->name}}</td>
                <td style="vertical-align: middle;"><a href="/publications/{{$publication->id}}/edit" class="btn btn-primary">Editar</a></td>
                <td style="vertical-align: middle;"><a href="/publications/{{$publication->id}}/delete" class="btn btn-primary">Eliminar</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No encontró ningun registro</td>
            </tr>
            @endforelse
        </table>
            </div>
        {{$publications->appends(request()->all())->links()}}
        </div>
    </div>
</div>
@endsection