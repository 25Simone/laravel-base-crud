@extends('home')

@section('main_content')
    {{-- Title --}}
    <h1>Comics</h1>
    
    {{-- Table --}}
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Series</th>
                <th>Type</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($comicsData as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->type }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi</a>
    </div>
@endsection