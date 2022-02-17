@extends('layouts.base')

@section('content')
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->synopsys }}</p>
@endsection