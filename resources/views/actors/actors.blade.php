@extends('layouts.base')

@section('content')
    <div class="row">
        @foreach ($actors as $actor)
            <div class="col-lg-3">
                <div>
                    <div>
                        <h6>{{ $actor->name }}</h6>
                        <div class="pb-2">
                            <img class="pb-3" width="200px" src="{{ $actor->cover }}" alt="">
                        </div>
                        <p>{{ $movie->released_at->format('Y-m-d') }}</p>
                        <div>
                            <p><a class="btn btn-primary" href="/movies/{{ $movie->id }}">Voir</a></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $movies->links() }}
@endsection