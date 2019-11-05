@extends('layouts.principal')
@section('titulo')
<h2 class="text-center bg-dark text-light p-4 m-0">Listado de Películas</h2>
@endsection
@section('contenido')
  <form action="/movies/search" method="get" class="form p-4 col-12 row bg-dark m-0">
    <input type="text" name="buscar" class="form-control col-5">
    <input type="submit" value="Buscar" class="col-1">
  </form>
      <table class="table table-dark m-0">
          <thead>
              <tr>
                  <th scope="col" class="text-center">ID</th>
                  <th scope="col" class="text-center">NOMBRE DE LA PELICULA</th>
                  <th scope="col" class="text-center">VER DETALLE</th>
                  <th scope="col" class="text-center">EDITAR PELÍCULA</th>
                  <th scope="col" class="text-center">BORRAR PELICULA</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($movies as $movie)
              <tr>
                <td class="text-center"><?= $movie["id"]; ?></td>
                <td class="pl-5"><?= $movie["title"]; ?></td>
                <td class="text-center"><a href="movies/<?= $movie['id']; ?>"><ion-icon name="search"></ion-icon></a></td>
                <td class="text-center"><a href="editarPelicula?id=<?= $movie['id']; ?>"><ion-icon name="brush"></ion-icon></a></td>
                <td class="text-center"><a href="borrarPelicula?id=<?= $movie['id']; ?>"><ion-icon name="trash"></ion-icon></a></td>
              </tr>
              @endforeach
          </tbody>
      </table>
      <div>
        {{$movies->links()}}
      </div>
@endsection