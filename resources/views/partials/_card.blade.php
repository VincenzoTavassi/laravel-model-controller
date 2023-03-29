<div class="{{Route::current()->getName() == 'homepage' ? 'col' : 'col-12 text-center'}}">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Titolo originale: {{$movie->original_title}}</h6>
            <p class="card-text">Nazionalità: {{$movie->nationality}} | Data di uscita: {{$movie->date}} | Voto: {{$movie->vote}}</p>
            @if (Route::current()->getName() == 'homepage')
            <a href="{{route('details', ['id' => $movie->id])}}" class="card-link">Dettagli</a>
            @else
            <a href="{{route('homepage')}}" class="card-link">Torna indietro</a>
            @endif
        </div>
    </div>
</div>