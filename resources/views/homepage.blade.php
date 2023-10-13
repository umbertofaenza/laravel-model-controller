@extends('layouts.app')

@section('cards')

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
          {{ $movie->title}}
        </div>
      </div>
    </div>
    @empty
    No movies found
    @endforelse
  </div>

</section>

@endsection