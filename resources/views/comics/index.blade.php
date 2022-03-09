@extends('layout')

@section('title', 'comics')

@section('main_content')
    {{-- Title --}}
    <h1 class="title">Comics</h1>

    <div class="cards-container row p-3">
        <!-- PRINT CARDS-->
        @foreach($comicsData as $key => $comic)
            @include('partials.comicCard')
        @endforeach
    </div>

    <div class="py-4 text-center">
        <a href="{{ route('comics.create') }}" class="btn btn-success fs-4 fw-bold">Aggiungi</a>
    </div>
@endsection