<?php
$navTabs= [
        [
                'name' => 'Perfil',
                'link' => 'profile'
        ],
        [
                'name' => 'Mis Publicaciones',
                'link' => 'myPublications'
        ],
        [
                'name' => 'Mis Compras',
                'link' => '#'
        ],
        [
                'name' => 'Mis Ventas',
                'link' => '#'
        ]
]
?>

<div class="row">
    <div class="col-sm-10 col-sm-offset-1 hidden-xs">
        <ul class="nav nav-pills nav-justified">
            @foreach($navTabs as $navTab)
                <li class="text-center" style="font-family: 'Lobster', cursive; font-size: 20px;"><a href="{{url($navTab['link'])}}">{{$navTab['name']}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="col-xs-12 visible-xs">
        <ul class="nav nav-tabs nav-justified">
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true" style="font-family: 'Lobster', cursive; font-size: 20px; background-color: black; color: white;"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                    <ul class="dropdown-menu" style="min-width: 100%;">
                              @foreach($navTabs as $navTab)
                                <li class="text-center" style="font-family: 'Lobster', cursive; font-size: 20px, min-width: 100%;";"><a href="{{url($navTab['link'])}}">{{$navTab['name']}}</a></li>
                                @endforeach
                        </ul>
            </li>
        </ul>
    </div>


    {{--<div class="row">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-12 visible-xs">--}}

    {{--<div class="navigator col-xs-12 visible-xs">--}}
    {{--<ul class="nav nav-tabs">--}}
    {{--<li><a href="#">Electro</a></li>--}}
    {{--<li><a href="#">Muebles</a></li>--}}
    {{--<li><a href="#">Deco</a></li>--}}
    {{--<li><a href="#">Juguetes</a></li>--}}
    {{--</ul>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs">--}}
    {{--<div class="navigator col-sm-12 col-md-12 col-lg-12 hidden-xs">--}}

    {{--<ul class="nav nav-tabs">--}}
    {{--<li role="presentation" class="active"><a href="#">Destacados</a></li>--}}
    {{--<li role="presentation"><a href="#">Electro</a></li>--}}
    {{--<li role="presentation"><a href="#">Muebles</a></li>--}}
    {{--<li role="presentation"><a href="#">Deco</a></li>--}}
    {{--<li role="presentation"><a href="#">Juguetes</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}


</div>
{{--<div class="col-xs-12"><hr></div>--}}
<hr style="margin: 10px 0;">