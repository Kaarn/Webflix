@extends('layouts.base')

@section('content')
    <h1>Hello {{ $name }}</h1>

    <ul>
    @foreach ($numbers as $number)
        <li>{{ $number }}</li>
    @endforeach
    </ul>
@endsection