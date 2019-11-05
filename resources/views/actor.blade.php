@extends('layouts/principal')
@section('contenido')
  <header class="bg-dark text-light col-12">
    <h1>{{ $actor->first_name }} {{ $actor->last_name }}</h1>
      <div class="col-12 col-md-4 text-ligth bg-black p-4">
        <h2>Rating: {{ $actor->rating }}</h2>
      </div>
  </header>
@endsection 
