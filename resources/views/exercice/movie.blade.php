@extends('layouts.base')

@section('content')
    <h1>{{ $movie->title }}</h1>
    <img width="150px" src="{{ $movie->cover }}" alt="">
    <p>{{ $movie->duration }}</p>
    <p>{{ $movie->released_at }}</p>
    <p>{{ $movie->synopsis }}</p>
@endsection