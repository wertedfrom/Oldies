@extends('layouts.mainLayout')
@section('title')
    Oldie's | Mi carrito de Compras
@endsection
@section('content')
    @include('nav-full')
    <div class="row minimo-pub">
        <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h1 class="text-center"><span class=" glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Mi carrito de compras</h1>
            <div class="row visible-xs">
                @forelse($cart as $item)
                    <div class="thumbnail text-center" style="padding-bottom: 10px; margin: 8px;">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <img src="{{asset('storage/'.$item->url_image)}}" alt="{{$item['title']}}" style="max-height: 120px; max-width:100%; margin-top: 20px;">
                            </div>
                            <div class="col-xs-6">
                                <p class="text-center"><strong>Título:</strong> <a href="{{url("/publication/$item->id")}}">{{$item->title}}</a></p>
                                <p class="text-center"><strong>Precio:</strong> {{number_format($item->price,2)}}</p>
                                <form class="text-center" action="{{route('cart-update',$item->id)}}" method="post">
                                    {{csrf_field()}}
Cantidad:<br>
                                    <input
                                            name="quantity_{{$item->id}}"
                                            type="number"
                                            min="1"
                                            max="{{$item->stock}}"
                                            value="{{$item->quantity}}"
                                            style="text-align: center;"
                                    >
                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>

                                </form>
                                <p class="text-center"><strong>Subtotal: </strong>$ {{number_format(($item->price * $item->quantity),2)}}</p>
                                <div>
                                    <button data-toggle="modal" data-target="#miVentanaXS{{$item->id}}" class="btn btn-primary btn-large"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Eliminar</button>
                                    <div id="miVentanaXS{{$item->id}}" class="modal fade" style="display:none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- <div class="modal-header">
                                                <a data-dismiss="modal" class="close">x</a>
                                                <h3>Cabecera</h3>
                                              </div> -->
                                                <div class="modal-body">
                                                    <a data-dismiss="modal" class="close">x</a>
                                                    <span class="glyphicon glyphicon-warning-sign" style="font-size: 60px;" aria-hidden="true"></span><h4>Estas seguro de eliminar este producto del carrito?</h4>
                                                    <!-- <p>
                                                    Estas seguro de eleminar la publicacion?
                                                  </p> -->
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" data-dismiss="modal" class="btn">Cancelar</a>
                                                    <a href="{{ route('cart-delete',$item->id)}}" class="btn btn-primary">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3 class="text-center">No hay productos agregados al carrito</h3>
                @endforelse
                @if(!empty($cart))
                    <hr>

                    <h3 class="text-center">
                        Total: $ {{number_format($total,2)}}
                    </h3>

                    <hr>
                    <div class="text-center">
                        <a class="btn btn-danger" href="{{ route('cart-trash') }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Vaciar carrito</a>
                    </div>
                @endif

            </div>
            <div class="row hidden-xs">
                <div class="col-xs-12" style="min-height: 280px;">
                    <table class="table table-hover table-responsive text-center">
                        <thead>
                        <tr>
                            <td></td>
                            <td><strong>Nombre</strong></td>
                            <td><strong>Precio</strong></td>
                            <td><strong>Cantidad</strong></td>
                            <td><strong>Subtotal</strong></td>
                            <td>
                                @if(!empty($cart))
                                    <a class="btn btn-danger" href="{{ route('cart-trash') }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Vaciar carrito</a>
                                @endif
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($cart as $item)
                            <tr>
                                <td style="vertical-align: middle;"><img src="{{asset('storage/'.$item->url_image)}}" alt="{{$item['title']}}" style="max-height: 50px;"></td>
                                <td style="vertical-align: middle;"><a href="{{url("/publication/$item->id")}}">{{$item->title}}</a></td>
                                <td style="vertical-align: middle;">$ {{number_format($item->price,2)}}</td>
                                <td style="vertical-align: middle;">
                                    <form action="{{route('cart-update',$item->id)}}" method="post">
                                        {{csrf_field()}}

                                        <input
                                                name="quantity_{{$item->id}}"
                                                type="number"
                                                min="1"
                                                max="{{$item->stock}}"
                                                value="{{$item->quantity}}"
                                                style="text-align: center;"
                                        >
                                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>

                                    </form>

                                </td>
                                <td style="vertical-align: middle;">$ {{number_format(($item->price * $item->quantity),2)}}</td>
                                <td style="vertical-align: middle;"><button data-toggle="modal" data-target="#miVentana{{$item->id}}" class="btn btn-primary btn-large"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Eliminar</button>
                                    <div id="miVentana{{$item->id}}" class="modal fade" style="display:none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- <div class="modal-header">
                                                <a data-dismiss="modal" class="close">x</a>
                                                <h3>Cabecera</h3>
                                              </div> -->
                                                <div class="modal-body">
                                                    <a data-dismiss="modal" class="close">x</a>
                                                    <span class="glyphicon glyphicon-warning-sign" style="font-size: 60px;" aria-hidden="true"></span><h4>Estas seguro de eliminar este producto del carrito?</h4>
                                                    <!-- <p>
                                                    Estas seguro de eleminar la publicacion?
                                                  </p> -->
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" data-dismiss="modal" class="btn">Cancelar</a>
                                                    <a href="{{ route('cart-delete',$item->id)}}" class="btn btn-primary">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center"><h3>No hay productos agregados al carrito</h3></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    @if(!empty($cart))
                        <hr>
                        <div class="text-right">
                            <h3>
                                Total: $ {{number_format($total,2)}}
                            </h3>
                        </div>
                        <hr>
                    @endif
                </div>
            </div>

            <div class="row" style="margin-top: 15px;">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-center">
                    <div class="row">
                        @if(empty($cart))
                            <div class="col-xs-12 text-center">
                                <a class="btn btn-primary" style="width: 75%;" href="{{ action('PublicationController@showBestPublications')}}"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Seguir Comprando</a>
                            </div>
                        @else
                            <div class="col-xs-12 col-sm-6 text-center">
                                <a class="btn btn-primary" style="width: 75%; margin-top: 7px;" href="{{ action('PublicationController@showBestPublications')}}"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Seguir Comprando</a>
                            </div>

                            <div class="col-xs-12 col-sm-6 text-center">
                                <a class="btn btn-primary" style="width: 75%; margin-top: 7px;" href="#">Continuar  <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></a>
                            </div>
                        @endif
                    </div>

                    {{--                    {{$publications->appends(request()->all())->links()}}--}}
                </div>
            </div>
        </div>
    </div>
@endsection
