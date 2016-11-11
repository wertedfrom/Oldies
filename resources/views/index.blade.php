@extends('layouts.mainLayout')
@section('title')
    Oldie's Home
@endsection
@section('content')
    <div class="row">
        <div class="navigator col-xs-12 visible-xs">
            <ul class="nav nav-tabs">
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Destacados</a></li>
                        <li><a href="#">Electro</a></li>
                        <li><a href="#">Muebles</a></li>
                        <li><a href="#">Deco</a></li>
                        <li><a href="#">Juguetes</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="navigator col-sm-12 col-md-12 col-lg-12 hidden-xs">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Destacados</a></li>
                <li role="presentation"><a href="#">Electro</a></li>
                <li role="presentation"><a href="#">Muebles</a></li>
                <li role="presentation"><a href="#">Deco</a></li>
                <li role="presentation"><a href="#">Juguetes</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="section col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">
                <img src="./images/bici.jpg" alt="bici" class="img-responsive img-thumbnail"/>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">
                <img src="./images/camara.jpg" alt="camara" class="img-responsive img-thumbnail"/>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">
                <img src="./images/camion.jpg" alt="camion" class="img-responsive img-thumbnail"/>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">
                <img src="./images/coser.jpg" alt="maquina_coser" class="img-responsive img-thumbnail"/>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item">
                <img src="./images/toca discos.jpg" alt="toca_discos" class="img-responsive img-thumbnail"/>
            </div>
        </div>
    </div>
@endsection