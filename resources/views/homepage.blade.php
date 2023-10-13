@extends('layouts.app')

@section('main-content')
    {{-- page title --}}
    <h2 class="mt-3 mb-5">
        {{ $page_title }}
    </h2>

    {{-- cards section --}}
    <section id="movie-cards">
        {{-- section title --}}
        <h4 class="section-title">
            Movies
        </h4>

        {{-- cards --}}
        <div class="row row-cols-2 g-3">
            @forelse($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            {{ $movie->title }}
                        </div>
                    </div>
                </div>
            @empty
                No movies found
            @endforelse
        </div>
    </section>
@endsection
