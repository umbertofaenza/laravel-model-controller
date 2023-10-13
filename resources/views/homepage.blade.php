<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>

  <div class="container">
    <h1 class="mt-3 mb-5">Home</h1>

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
  </div>
  
</body>

</html>
