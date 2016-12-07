@extends('layouts.mainLayout')
@section('title')
    Oldie's | My Publications
@endsection
@section('content')
    @include('nav-profile')
    <div class="row minimo-pub">

        <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h1 class="text-center">Mis Publicaciones</h1>
            @include('searchInMyPublications')
            <div class="row visible-xs">
                @foreach($publications as $publication)
                    <div class="thumbnail text-center" style="padding-bottom: 10px; margin: 8px;">
                        <div class="row">
                            <div class="col-xs-6">
                                <img src="{{asset('storage/'.$publication->url_image)}}" alt="{{$publication['title']}}" style="max-height: 120px; max-width:100%; margin-top: 20px;">
                            </div>
                            <div class="col-xs-6">
                                <p><strong>Título:</strong> <a href="{{url("/publication/$publication->id")}}">{{$publication->title}}</a></p>
                                <p><strong>Stock:</strong> {{$publication->stock}}</p>
                                <p><strong>Precio:</strong> {{$publication->price}}</p>
                                <p><strong>Categoria:</strong> {{$publication->category->name}}</p>
                                <div>
                                    <a href="/publications/{{$publication->id}}/edit" class="btn btn-primary" style="margin-top:5px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
                                    <button data-toggle="modal" data-target="#miVentana{{$publication->id}}" class="btn btn-primary btn-large" style="margin-top: 5px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button>
                                    <div id="miVentana{{$publication->id}}" class="modal fade" style="display:none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- <div class="modal-header">
                                                <a data-dismiss="modal" class="close">x</a>
                                                <h3>Cabecera</h3>
                                              </div> -->
                                                <div class="modal-body">
                                                    <a data-dismiss="modal" class="close">x</a>
                                                    <span class="glyphicon glyphicon-warning-sign" style="font-size: 60px;" aria-hidden="true"></span><h4>Estas seguro de eliminar la publicación?</h4>
                                                    <!-- <p>
                                                    Estas seguro de eliminar la publicacion?
                                                  </p> -->
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" data-dismiss="modal" class="btn">Cancelar</a>
                                                    <a href="/publications/{{$publication->id}}/delete" class="btn btn-primary">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row hidden-xs">
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
                                <td style="vertical-align: middle;"><a href="/publications/{{$publication->id}}/edit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
                                    <button data-toggle="modal" data-target="#miVentana{{$publication->id}}" class="btn btn-primary btn-large"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button>
                                    <div id="miVentana{{$publication->id}}" class="modal fade" style="display:none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- <div class="modal-header">
                                                <a data-dismiss="modal" class="close">x</a>
                                                <h3>Cabecera</h3>
                                              </div> -->
                                                <div class="modal-body">
                                                    <a data-dismiss="modal" class="close">x</a>
                                                    <span class="glyphicon glyphicon-warning-sign" style="font-size: 60px;" aria-hidden="true"></span><h4>Estas seguro de eliminar la publicación?</h4>
                                                    <!-- <p>
                                                    Estas seguro de eliminar la publicacion?
                                                  </p> -->
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" data-dismiss="modal" class="btn">Cancelar</a>
                                                    <a href="/publications/{{$publication->id}}/delete" class="btn btn-primary">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- <a href="/publications/{{$publication->id}}/delete" class="btn btn-primary">Eliminar</a></td> -->
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center"><h3>No encontró ningun registro</h3></td>
                            </tr>
                        @endforelse
                    </table>
                </div>
                {{$publications->appends(request()->all())->links()}}
            </div>
        </div>
    </div>
@endsection
