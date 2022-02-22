@extends('layouts.base')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0 list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <h1>Modifier la Catégorie {{ $category->name }}</h1>
    <form action="/categories/{{ $category->id }}" method="post">
        @csrf @method('put')
        <input class="form-control" type="text" name="name" placeholder="Fantastique..." value="{{ old('name', $category->name) }}">
       <!-- <input type="text" name="email" placeholder="doubidou@gmail.com...">-->

        <button class="btn btn-primary mt-3">Modifier</button>
    </form>
@endsection