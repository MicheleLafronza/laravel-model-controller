{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    
<div class="container my-5">

    <h1>Film ordinati per voto</h1>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Voto</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($movies as $movie)
            <tr>
                <th scope="row">{{ $movie->id }}</th>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->vote }}</td>
                
            </tr>    
            @endforeach
            
        </tbody>
      </table>

</div>

@endsection