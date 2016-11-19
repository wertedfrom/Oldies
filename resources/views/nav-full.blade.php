<?php
$categories= ['Destacados','Electro','Muebles','Deco','Juguetes','Grafica'];
?>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <ul class="nav nav-pills nav-justified">
            @foreach($categories as $category)
                <li class="text-center" style="font-family: 'Lobster', cursive; font-size: 20px;">{{  $category }}</li>
            @endforeach
        </ul>
    </div>
</div>
{{--<div class="col-xs-12"><hr></div>--}}
<hr style="margin: 10px 0;">