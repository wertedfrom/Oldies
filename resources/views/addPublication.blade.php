@extends('layouts.mainLayout')
@section('title')
    Oldie's Home
@endsection
@section('content')

<div class="row">
    <div class="section col-md-8 col-md-offset-2">
      <h2>Agregar una Publicacion</h2>
      <form class="form" action="publications/add" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          @if($errors->has('title'))
              @foreach($errors->get('title') as $error)
                  <div class="text text-danger">{{ $error }}</div>
              @endforeach
          @endif
          <div class="form-group @if($errors->has('title')) has-error @else @endif">
              <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Titulo">
          </div>
          @if($errors->has('description'))
              @foreach($errors->get('description') as $error)
                  <div class="text text-danger">{{ $error }}</div>
              @endforeach
          @endif
          <div class="form-group @if($errors->has('description')) has-error @else @endif">
              <input class="form-control" type="text" name="description" value="{{ old('descrition') }}" placeholder="description">
          </div>
          @if($errors->has('price'))
              @foreach($errors->get('price') as $error)
                  <div class="text text-danger">{{ $error }}</div>
              @endforeach
          @endif
          <div class="form-group @if($errors->has('price')) has-error @else @endif">
              <input class="form-control" type="text" name="price" value="{{ old('price') }}" placeholder="price">
          </div>
          @if($errors->has('stock'))
              @foreach($errors->get('stock') as $error)
                  <div class="text text-danger">{{ $error }}</div>
              @endforeach
          @endif
          <div class="form-group @if($errors->has('stock')) has-error @else @endif">
              <input class="form-control" type="text" name="stock" value="{{ old('stock') }}" placeholder="Stock">
          </div>
          <div class="form-group">
              <select class="form-control" name="categorie_id">
                  @foreach($categories as $categorie)
                      <option value="{{ $categorie->id }}" @if(old('categorie_id') == $categorie->id) selected @endif>{{ $categorie->name }}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group @if($errors->has('cover')) has-error @else @endif">
              <input class="form-control" type="file" name="cover">
          </div>
          <button type="submit" class="btn btn-primary center-block">Ingresar</button>
      </form>
    </div>
</div>
@endsection
