@extends('layout')

@section('title', 'comics | details')

@section('main_content')
    <h1 class="title">Dettagli fumetto # {{ $comic->id }}</h1>

    <div class="row details-page">
        @include('partials.comicCard')
        <div class="comic-details col p-2">
            <ul>
                <li> <strong>Title:</strong> {{ $comic->title }} </li>
                <li> <strong>Descrizione:</strong> {{ $comic->description }} </li>
                <li> <strong>Serie:</strong> {{ $comic->series }} </li>
                <li> <strong>Tipo:</strong> {{ $comic->type }} </li>
                <li> <strong>Data di uscita:</strong> {{ $comic->sale_date }} </li>
            </ul>
            <a class="btn btn-link" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
        </div>
    </div>
@endsection