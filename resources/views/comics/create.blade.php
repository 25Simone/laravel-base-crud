@extends('home')
@section('main_content')
<h1>Aggiungi fumetto</h1>

<form action="" method="post" class="row g-3">
  @csrf

  <div class="mb-3">
    <label class="form-label">Titolo</label>
    <input type="text" class="form-control" name="title">
  </div>

  <div class="mb-3">
    <label class="form-label">Descrizione</label>
    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Anteprima</label>
    <input type="number" class="form-control" name="Thumb">
  </div>

  <div class="mb-3">
    <label class="form-label">Prezzo</label>
    <input type="text" class="form-control" name="price">
  </div>

  <div class="mb-3">
    <label class="form-label">Serie</label>
    <input type="text" class="form-control" name="series">
  </div>

  <div class="mb-3">
    <label class="form-label">Tipo</label>
    <input type="text" class="form-control" name="Type">
  </div>

  <div class="mb-3">
    <label class="form-label">Data di uscita</label>
    <input type="text" class="form-control" name="sale_date">
  </div>


  <div class="d-flex">
    <button class="btn btn-outline-secondary me-3" type="reset">Indietro</button>
    <button class="btn btn-success" type="submit">Crea</button>
  </div>
</form>
@endsection