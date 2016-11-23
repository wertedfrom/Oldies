@extends('layouts.mainLayout')
@section('title')
    Oldie's Home
@endsection
@section('content')

    <div class="row minimo">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
            <form class="form-horizontal" action="/publications/store" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}


                <h1>Agregar una Publicacion</h1>

                <div class="form-group @if($errors->has('title')) has-error @else @endif">

                    <label for="name" class="col-md-4 control-label">Titulo: </label>

                    <div class="col-md-6">
                        <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Titulo">
                    </div>

                    @if($errors->has('title'))
                        @foreach($errors->get('title') as $error)
                            <div class="text text-danger">{{ $error }}</div>
                        @endforeach
                    @endif

                </div>

                <div class="form-group @if($errors->has('description')) has-error @else @endif">

                    <label for="description" class="col-md-4 control-label">Descripcion: </label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" size="500" name="description" value="{{ old('descrition') }}" placeholder="description">
                    </div>

                    @if($errors->has('description'))
                        @foreach($errors->get('description') as $error)
                            <div class="text text-danger">{{ $error }}</div>
                        @endforeach
                    @endif

                </div>

                <div class="form-group @if($errors->has('price')) has-error @else @endif">


                    <label for="price" class="control-label col-md-4">Precio: </label>

                    <div class="col-md-6">
                        <input class="form-control" type="number" step="any" name="price" value="{{ old('price') }}" placeholder="price">
                    </div>

                    @if($errors->has('price'))
                        @foreach($errors->get('price') as $error)
                            <div class="text text-danger">{{ $error }}</div>
                        @endforeach
                    @endif

                </div>

                <div class="form-group @if($errors->has('stock')) has-error @else @endif">

                    <label for="stock" class="control-label col-md-4">Stock: </label>

                    <div class="col-md-6">
                        <input class="form-control" type="text" name="stock" value="{{ old('stock') }}" placeholder="Stock">
                    </div>

                    @if($errors->has('stock'))
                        @foreach($errors->get('stock') as $error)
                            <div class="text text-danger">{{ $error }}</div>
                        @endforeach
                    @endif

                </div>

                <div class="form-group{{ $errors->has('categorie_id') ? ' has-error' : '' }}">
                    <label for="categorie_id" class="col-md-4 control-label">Categoria: </label>
                    <div class="col-md-6">
                        <select class="form-control" name="categorie_id">
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}"
                                        @if(old('categorie_id') == $categorie->id) selected
                                        @endif
                                >{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @if($errors->has('categorie_id'))
                        @foreach($errors->get('categorie_id') as $error)
                            <div class="text text-danger">{{ $error }}</div>
                        @endforeach
                    @endif

                </div>

                <div class="form-group @if($errors->has('cover')) has-error @else @endif">
                    <label class="control-label col-md-4" for="cover">Seleccionar Archivo</label>
                    <div class="col-md-6 text-left">
                        <input value="{{ old('cover') }}" class="form-control" type="file" name="cover" placeholder="Archivo">
                        {{--<div class="fileUpload btn btn-success" style="margin-left:0; width:100%;">--}}
                        {{--<span>Examinar...</span>--}}
                        {{--<input type="file" class="form-control upload name="cover" />--}}
                        {{--</div>--}}
                    </div>
                    @if($errors->has('cover'))
                        @foreach($errors->get('cover') as $error)
                            <span class="text-danger">{{ $error }}</span>
                        @endforeach
                    @endif
                </div>


                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary center-block" style="font-size:20px;">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
