<div class="col-lg-3 mb-5">
    <div>
        <div>
            <a href="/movies/{{ $movie->id }}"><img class="pb-3" width="200px" src="{{ $movie->cover }}" alt="{{ $movie->title }}"></a>
            <h6>{{ $movie->title }}</h6>
            <p>{{ $movie->released_at->translatedFormat('d F Y') }} | {{ $movie->category?->name }} | {{ $movie->formatDuration() }}</p>
        </div>
    </div>
</div>