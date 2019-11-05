@extends('layouts.principal')
@section('titulo')
  <h2 class="text-center bg-dark text-light p-4 m-0">Listado de Actores</h2>
@endsection
@section('contenido')
<form action="/actors/search" method="get" class="form p-4 col-12 row bg-dark m-0">
  <input type="text" name="buscar" class="form-control col-5">
  <input type="submit" value="Buscar" class="col-1">
</form>
      <table class="table table-dark m-0">
          <thead>
              <tr>
                  <th scope="col" class="text-center">ID</th>
                  <th scope="col" class="text-center">Nombre</th>
                  <th scope="col" class="text-center">Apellido</th>
                  <th scope="col" class="text-center">VER DETALLE</th>
                  <th scope="col" class="text-center">EDITAR PELÍCULA</th>
                  <th scope="col" class="text-center">BORRAR PELICULA</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($actors as $actor)
              <tr>
                <td class="text-center">{{ $actor->id }}</td>
                <td class="text-center">{{ $actor->first_name}}</td>
                <td class="text-center">{{ $actor->last_name }}</td>
                <td class="text-center"><a href="actors/<?= $actor['id']; ?>"><ion-icon name="search"></ion-icon></a></td>
                <td class="text-center"><a href="editarPelicula?id=<?= $actor['id']; ?>"><ion-icon name="brush"></ion-icon></a></td>
                <td class="text-center"><a href="borrarPelicula?id=<?= $actor['id']; ?>"><ion-icon name="trash"></ion-icon></a></td>
              </tr>
              @endforeach
          </tbody>
      </table>
@endsection