@extends('layout')

@section('title', 'comics')

@section('main_content')
    {{-- Title --}}
    <h1 class="title">Comics</h1>

    <div class="cards-container row p-3">
        <!-- PRINT CARDS-->
        @foreach($comicsData as $key => $comic) 
            <div class="card" >
                <!-- CARD IMG -->
                <div class="card-image">
                    <img class="thumb" src='{{ $comic->thumb }}' alt="card img">
                </div>
                <div class="card-data">
                    <h5>{{ strtoupper($comic->series) }}</h5>
                    <div>{{ $comic->type }}</div>
                    <div class="price">{{ $comic->price}} €</div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="py-4 text-center">
        <a href="{{ route('comics.create') }}" class="btn btn-success fs-4 fw-bold">Aggiungi</a>
    </div>
@endsection