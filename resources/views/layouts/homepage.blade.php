<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <h1 class="my-5 text-center">@yield('h1')</h1>
        <div class="row row-cols-3 g-3">
            @if (isset($movies))
            @forelse ($movies as $movie)
            @include('partials._card')   
            @empty <h2>Nessun film trovato.</h2>             
            @endforelse
            @else @include('partials._card')
            @endif
        </div>
    </div>
</body>
</html>