@extends('layouts.mainLayout')
@section('title')
    Oldie's | Mi carrito de Compras
@endsection
@section('content')
    @include('nav-profile')
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
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($cart as $item)
                            <tr>
                                <td style="vertical-align: middle;"><img src="{{asset('storage/'.$item->url_image)}}" alt="{{$item['title']}}" style="max-height: 50px;"></td>
                                <td style="vertical-align: middle;"><a href="{{url("/publication/$item->id")}}">{{$item->title}}</a></td>
                                <td style="vertical-align: middle;">$ {{number_format($item->price,2)}}</td>
                                <td style="vertical-align: middle;">{{$item->quantity}}</td>
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
                                <td colspan="5" class="text-center">No encontró ningun registro</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!--    <div class="row">-->
            <!--        <div class="col-md-10 col-md-offset-1 text-center">-->
            {{--        <!--            {{$publications->appends(request()->all())->links()}}-->--}}
        </div>
    </div>
@endsection
