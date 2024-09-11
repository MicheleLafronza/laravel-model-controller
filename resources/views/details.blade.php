{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

<div class="container my-5 text-center">

    <h1>{{$movie->title }}</h1>

    <h2>Titolo originale: {{ $movie->original_title }}</h2>

    <h2>Lingua originale: {{ $movie->nationality }}</h2>

    <h2>Data di uscita: {{ $movie->date }}</h2>

    <h2>Voto: {{ $movie->vote }}</h2>

</div>
    
@endsection