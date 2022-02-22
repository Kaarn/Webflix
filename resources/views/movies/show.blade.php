@extends('layouts.base')
    @section('content')
    <div class="d-flex justify-content-between">
        <div class="d-flex flex-column">
            <h2>{{ $movie->title }}</h2>
            <img width="350px" src="{{ $movie->cover }}" alt="">
            <p class="fw-bold">{{ $movie->released_at->format('Y-m-d') }}</p>
            <p class="fw-bold">Durée : {{ $movie->duration }}</p>
        </div>
        <div>
            <p class="col-6 m-auto p-5 text-left">{{ $movie->synopsis }}</p>
        </div>
    </div>
    @endsection