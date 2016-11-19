<?php
$categories= \App\Categorie::all();
?>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <ul class="nav nav-pills nav-justified">
            @foreach($categories as $category)
                <li class="text-center" style="font-family: 'Lobster', cursive; font-size: 20px;"><a href={{url("/category/$category->id")}}>{{  $category->name}}</a></li>
                {{--<li class="text-center" style="font-family: 'Lobster', cursive; font-size: 20px;">{{  $category->name}}</li>--}}
            @endforeach
        </ul>
    </div>
</div>
{{--<div class="col-xs-12"><hr></div>--}}
<hr style="margin: 10px 0;">