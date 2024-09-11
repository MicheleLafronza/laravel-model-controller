{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>Lista completa dei film</h1>
    
    <div class="row">
   
        @foreach ($movies as $movie)
        <div class="card col-4">
            <div class="card-body">
            <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
            <h6 class="card-title">Titolo originale: {{ $movie->original_title }}</h6>
            <h6 class="card-title">Lingua originale: {{ $movie->nationality }}</h6>
            <h6 class="card-title">Data di uscita: {{ $movie->date }}</h6>
            <h6 class="card-title">Voto: {{ $movie->vote }}</h6>
            <a href="{{ route('details', ['id' => $movie->id]) }}" class="btn btn-primary">Vai ai dettagli</a>
            </div>
        </div>    
        @endforeach
        
    </div>

</div>

@endsection

