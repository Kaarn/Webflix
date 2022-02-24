@extends('layouts.base')

@section('content')

    <a href="/movies/create" class="btn btn-primary mb-5">Créer un film</a>

    <div class="row">
        @foreach ($movies as $movie)
            @include('partials.movie')
        @endforeach
    </div>

    {{ $movies->links() }}
@endsection