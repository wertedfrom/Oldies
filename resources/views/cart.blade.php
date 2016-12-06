@extends('layouts.mainLayout')
@section('title')
    Oldie's | Mi carrito de Compras
@endsection
@section('content')
    @include('nav-full')
    <div class="row minimo-pub">
        <div class="section col-md-8 col-md-offset-2">
            <h1 class="text-center"><span class=" glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Mi carrito de compras</h1>
            <div class="row">
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
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 text-center">
                                            <a class="btn btn-danger" href="{{ route('cart-trash') }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Vaciar carrito</a>

                                            {{--                    {{$publications->appends(request()->all())->links()}}--}}
                                        </div>
                                    </div>
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
                                        <div class="form-group">
                                            <input
                                                    name="quantity_{{$item->id}}"
                                                    type="number"
                                                    min="1"
                                                    max="{{$item->stock}}"
                                                    value="{{$item->quantity}}"
                                                    style="text-align: center"
                                            >
                                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
                                        </div>
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
                    @endif
                </div>
            </div>

            <div class="row" style="margin-top: 15px;">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="row">
                        @if(empty($cart))
                            <div class="col-md-12 text-center">
                                <a class="btn btn-primary" style="width: 50%;" href="{{ action('PublicationController@showBestPublications')}}"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Seguir Comprando</a>
                            </div>
                        @else
                            <div class="col-md-6 text-right">
                                <a class="btn btn-primary" style="width: 75%;" href="{{ action('PublicationController@showBestPublications')}}"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Seguir Comprando</a>
                            </div>

                            <div class="col-md-6 text-left">
                                <a class="btn btn-primary" style="width: 75%;" href="#">Continuar  <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></a>
                            </div>
                        @endif
                    </div>

                    {{--                    {{$publications->appends(request()->all())->links()}}--}}
                </div>
            </div>
        </div>
    </div>
@endsection
