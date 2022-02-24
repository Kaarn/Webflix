@extends('layouts.base')
    @section('content')
        <h1>{{ $category->name }}</h1>

    <div class="row">
        @foreach ($category->movies as $movie)
            @include('partials.movie')
        @endforeach
    </div>
    @endsection