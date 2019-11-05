@extends('layouts/principal')
@section('contenido')
  <header class="bg-dark text-light col-12">
    <h1>{{ $movie->title }}</h1>
      <div class="col-12 col-md-6 text-ligth bg-black p-4">
        <h2>rating: {{ $movie->rating ?? '' }}</h2>
        <h2>premios: {{ $movie->awards ?? '' }}</h2>
        <h2>fecha de creacion: {{ $movie->release_date ?? '' }}</h2>
      </div>
  </header>
@endsection 
