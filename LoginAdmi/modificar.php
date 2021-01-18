<?php
require_once("tablaPeliculas.php");
$pelicula = getPelicula($_GET["id"], $BD);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formularios</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <!-- INICIA NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">APLICACIÓN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Películas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Punto de venta</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- TERMINA NAVBAR -->


  <!-- INICIA CONTENEDOR -->
  <div class="container">

    <h1>.::Modificar Pelicula</h1>
    <hr>

    <div class="row">
      <!-- INICIA FORMULARIO DE CAPTURA -->
      

      <div class="col-md-6 col-sm-12">

        <form action="alterartabla.php" method="post" id="formulario">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $pelicula['titulo'] ?>" required>
            </div>
            <div class="form-group col-md-6">
              <label for="director">director</label>
              <input type="text" class="form-control" name="director" value="<?= $pelicula['director'] ?>"required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputSinopsis">Sinopsis</label>
            <input type="text" class="form-control" name="sinopsis" id="sinopsis" value="<?= $pelicula['sinopsis'] ?> "required>
          </div>
          <div class="form-group">
            <label for="inputDuracion">Duracion</label>
            <input type="text" class="form-control" name="duracion" value="<?= $pelicula['duracion'] ?> "required>
          </div>
          <div class="form-group">
            <label for="inputGenero">Genero</label>
            <input type="text" class="form-control" name="genero" value="<?= $pelicula['genero'] ?> "required>
          </div>
          <div class="form-group">
            <label for="inputfechaEstreno">fecha de Estreno</label>
            <input type="date" class="form-control" name="fechaEstreno" value="<?= $pelicula['fechaEstreno'] ?> "required>
          </div>
          <div class="form-group">
            <label for="inputfechaCartele">Fecha de inicio de cartelera</label>
            <input type="date" class="form-control" name="fechaCartele" value="<?= $pelicula['fechaCartele'] ?> "required>
          </div>
          <div class="form-group">
            <label for="inputFechafincartelera">Fecha de fin de cartelera</label>
            <input type="date" class="form-control" name="Fechafincartelera" value="<?= $pelicula['Fechafincartelera'] ?> "required>
          </div>
          <div class="form-group">
            <label for="inputURLposter">URL de poster</label>
            <input type="text" class="form-control" name="URLposter" value="<?= $pelicula['URLposter'] ?> "required>
          </div>
          <div class="form-group">
            <label for="inputURLtrailer">URL del trailer</label>
            <input type="text" class="form-control" name="URLtrailer" value="<?= $pelicula['URLtrailer'] ?> "required>
          </div>
          <div class="form-group">
            <label for="inputURLweboficial">URL de la web oficial</label>
            <input type="text" class="form-control" name="URLweboficial" value="<?= $pelicula['URLweboficial'] ?> "required>
          </div>
          <div class="form-group">
            <label for="inputidiomas">idiomas</label>
            <input type="text" class="form-control" name="idiomas" value="<?= $pelicula['idiomas'] ?> "required>
          </div>
          <div class="form-group">
            <label for="inputpaisorigen">pais de origen</label>
            <input type="text" class="form-control" name="paisorigen" value="<?= $pelicula['paisorigen'] ?> "required>
          </div>
          <div class="form-group">
            <label for="inputestudioproductor">estudio productor</label>
            <input type="text" class="form-control" name="estudioproductor" value="<?= $pelicula['estudioproductor'] ?> "required>
          </div>


          <input type="hidden" name="id" value="<?= $pelicula['id_pelis'] ?>">


          <button type="submit"name="register" value="register" class="btn btn-primary">Modificar</button>
        </form>
      </div>
      <!-- FINALIZA FORMULARIO DE CAPTURA -->
    </div>



  </div>
  <!-- FINALIZA CONTENEDOR-->




  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>