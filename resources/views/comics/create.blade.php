@extends('layout')

@section('title', 'comics | create')

@section('main_content')
<h1>Aggiungi fumetto</h1>

{{-- Catch the possible errors --}}
{{-- @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif --}}

<form action="{{ route('comics.store') }}" method="post" class="row g-3">
  @csrf

  <div class="mb-3">
    <label class="form-label">Titolo</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
    @error('title')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Descrizione</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10">{{ old('description') }}</textarea>
    @error('description')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Anteprima</label>
    <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" value="{{ old('thumb') }}">
    @error('thumb')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Prezzo</label>
    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">
    @error('price')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Serie</label>
    <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" value="{{ old('series') }}">
    @error('series')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Tipo</label>
    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}">
    @error('type')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Data di uscita</label>
    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{ old('sale_date') }}">
    @error('sale_date')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>


  <div class="d-flex">
    <button class="btn btn-outline-secondary me-3" type="reset">Indietro</button>
    <button class="btn btn-success" type="submit">Crea</button>
  </div>
</form>
@endsection