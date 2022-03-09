@extends('layout')

@section('title', 'comics | edit comic')

@section('main_content')
<h1 class="title">Modifica fumetto # {{ $comic->id }}</h1>

<form action="{{ route('comics.update', $comic->id) }}" method="post" class="row g-3">
  @csrf
  @method('put')

  <div class="mb-3">
    <label class="form-label">Titolo</label>
    <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
  </div>

  <div class="mb-3">
    <label class="form-label">Descrizione</label>
    <textarea name="description" class="form-control" cols="30" rows="10"> {{ $comic->description }} </textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Anteprima</label>
    <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">
  </div>

  <div class="mb-3">
    <label class="form-label">Prezzo</label>
    <input type="number" class="form-control" name="price" value="{{ $comic->price }}">
  </div>

  <div class="mb-3">
    <label class="form-label">Serie</label>
    <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
  </div>

  <div class="mb-3">
    <label class="form-label">Tipo</label>
    <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
  </div>

  <div class="mb-3">
    <label class="form-label">Data di uscita</label>
    <input type="date" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
  </div>


  <div class="d-flex">
    <button class="btn btn-outline-secondary me-3" type="reset">Indietro</button>
    <button class="btn btn-success" type="submit">Crea</button>
  </div>
</form>
@endsection