<?php
$categories= \App\Categorie::all();
?>

<div class="row">
    <div class="col-md-10 col-md-offset-1 hidden-xs">
        <ul class="nav nav-pills nav-justified">
            @foreach($categories as $category)
                <li class="text-center" style="font-family: 'Lobster', cursive; font-size: 20px;"><a href={{url("/category/$category->id")}}>{{  $category->name}}</a></li>
                {{--<li class="text-center" style="font-family: 'Lobster', cursive; font-size: 20px;">{{  $category->name}}</li>--}}
            @endforeach
        </ul>
    </div>

    <div class="col-xs-12 visible-xs">
        <ul class="nav nav-tabs nav-justified">
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true" style="font-family: 'Lobster', cursive; font-size: 20px; background-color: black; color: white;" ><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                <ul class="dropdown-menu" style="min-width: 100%;">
                    @foreach($categories as $categorie)
                        <li class="text-center" style="font-family: 'Lobster', cursive; font-size: 15px; min-width: 100%;";"><a href="{{url("/category/$categorie->id")}}">{{$categorie->name}}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</div>
{{--<div class="col-xs-12"><hr></div>--}}
<hr style="margin: 10px 0;">