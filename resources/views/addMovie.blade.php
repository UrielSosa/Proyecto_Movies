<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form id="agregarPelicula" name="agregarPelicula" method="POST">
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="premios" id="premios"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="duracion" id="duracion"/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <select name="dia">
                    <option value="">Dia</option>
                    @for ($i=0; $i < 32; $i++)
                      <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <select name="mes">
                    <option value="">Mes</option>
                    @for ($i=0; $i < 13; $i++)
                      <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <select name="anio">
                    <option value="">Anio</option>
                    @for ($i=1900; $i < 2019; $i++)
                      <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
        <footer class="col-12 bg-dark m-0 p-2">
          <div class="col-12">
            <a class="btn btn-primary stretched-link mb-5" href="/">Volver</a>
          </div>
        </footer>
    </body>
</html>
