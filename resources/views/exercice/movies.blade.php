@extends('layouts.base')

@section('content')
    <a href="/exercice/films/creer">Ajouter un film</a>

    <div>
        @foreach ($movies as $movie)
            <div>
                <h2>{{ $movie->title }}</h2>
                <img width="100px" src="{{ $movie->cover }}" alt="">
                <p>{{ $movie->duration }}</p>
                <p>{{ $movie->released_at }}</p>
                <a href="/exercice/films/{{ $movie->id }}">Voir</a>
            </div>
        @endforeach
    </div>
@endsection