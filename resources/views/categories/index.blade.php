@extends('layouts.base')

@section('content')
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-lg-3">
                {{ $category->name }}
            </div>
        @endforeach
    </div>
@endsection