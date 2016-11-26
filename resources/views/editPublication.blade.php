@extends('layouts.mainLayout')
@section('title')
    Oldie's | edit Publication
@endsection
@section('content')
    @include('nav-full')
    <div class="row minimo-pub">
        <div class="section col-sm-10 col-sm-offset-1">
            <h1>Editar la Publicacion</h1>
            <div class="row">
                <div class="col-sm-5 col-md-4">
                    <img src="{{asset('storage/'.$publication->url_image)}}" alt="{{$publication['title']}}" style="max-width:100%;" class="center-block">
                </div>
                <div class="col-sm-7 col-md-8">
                    <form class="form-horizontal" action="/publications/{{$publication->id}}/update" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group @if($errors->has('title')) has-error @else @endif">

                            <label for="name" class="col-md-4 control-label">Titulo: </label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="title" value="@if(old('title')){{old('title')}}@else{{ $publication->title }}@endif" placeholder="Titulo">

                                @if($errors->has('title'))
                                    @foreach($errors->get('title') as $error)
                                        <div class="text text-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>

                        </div>

                        <div class="form-group @if($errors->has('description')) has-error @else @endif">

                            <label for="description" class="col-md-4 control-label">Descripcion: </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="description" placeholder="Descripción" rows="6">@if(old('title')){{old('description')}}@else{{ $publication->description }}@endif</textarea>

                                @if($errors->has('description'))
                                    @foreach($errors->get('description') as $error)
                                        <div class="text text-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>

                        </div>

                        <div class="form-group @if($errors->has('price')) has-error @else @endif">


                            <label for="price" class="control-label col-md-4">Precio: </label>

                            <div class="col-md-6">
                                <input class="form-control" type="number" step="any" name="price" value="@if(old('price')){{old('price')}}@else{{ $publication->price}}@endif" placeholder="price">

                                @if($errors->has('price'))
                                    @foreach($errors->get('price') as $error)
                                        <div class="text text-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="form-group @if($errors->has('stock')) has-error @else @endif">

                            <label for="stock" class="control-label col-md-4">Stock: </label>

                            <div class="col-md-6">
                                <input class="form-control" type="number" name="stock" value="@if(old('stock')){{old('stock')}}@else{{ $publication->stock }}@endif" placeholder="Stock">

                                @if($errors->has('stock'))
                                    @foreach($errors->get('stock') as $error)
                                        <div class="text text-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('categorie_id') ? ' has-error' : '' }}">
                            <label for="categorie_id" class="col-md-4 control-label">Categoria: </label>
                            <div class="col-md-6">
                                <select class="form-control" name="categorie_id">
                                    @foreach($categories as $categorie)
                                        <option value="{{ $categorie->id }}"
                                                @if(old('categorie_id') == $categorie->id) selected
                                                @elseif($categorie->id == $publication->categorie_id) selected
                                                @endif
                                        >{{ $categorie->name }}</option>
                                    @endforeach
                                </select>

                                @if($errors->has('categorie_id'))
                                    @foreach($errors->get('categorie_id') as $error)
                                        <div class="text text-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>

                        </div>

                        <div class="form-group @if($errors->has('cover')) has-error @else @endif">

                            <label class="control-label col-md-4" for="cover">Seleccionar Archivo</label>
                            <div class="col-md-6 text-left">
                                <input value="{{ old('cover') }}" class="form-control" type="file" name="cover" placeholder="Archivo">
                                {{--<div class="fileUpload btn btn-success" style="margin-left:0; width:100%;">--}}
                                {{--<span>Examinar...</span>--}}
                                {{--<input type="file" class="form-control upload name="cover" />--}}
                                {{--</div>--}}
                                @if($errors->has('cover'))
                                    @foreach($errors->get('cover') as $error)
                                        <span class="text-danger">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{--<button type="submit" class="btn btn-primary center-block" style="font-size:20px;">Ingresar</button>--}}
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection