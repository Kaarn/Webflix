@extends('layouts.base')

@section('content')
    @foreach ($errors->all() as $error)
        {{ $errors }}  
    @endforeach

    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Fantastique...">
        <input type="text" name="email" placeholder="doubidou@gmail.com...">

        <button>Ajouter</button>
    </form>
@endsection