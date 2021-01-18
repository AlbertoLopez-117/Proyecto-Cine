<?php
require_once("baseDatos.php");
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

    <h1>.::Peliculas</h1>
    <hr>

    <div class="row">
      <!-- INICIA TABLA -->

      <?php
      $usuarios = obtenerTodos("peliculas", $BD);
      ?>

      <div class="col-md-6 col-sm-12">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">ID</th>
              <th scope="col">Titulo</th>
              <th scope="col">Director</th>
              <th scope="col">Estudio Productor</th>
              <th scope="col">Pais de origen</th>
            </tr>
            <?php

            foreach ($usuarios as $key => $usuario) {
            ?>

              <tr>
                <td scope="col"><?= $key + 1 ?></td>
                <td scope="col"><?= $usuario["id_pelis"] ?></td>
                <td scope="col"><?= $usuario["titulo"] ?></td>
                <td scope="col"><?= $usuario["estudioproductor"] ?></td>
                <td scope="col"><?= $usuario["paisorigen"] ?></td>
                <td scope="col">
                  <a class="btn btn-warning" href="modificar.php?id=<?= $usuario["id_pelis"] ?>">Modificar</a>
                  <a class="btn btn-danger" onclick="confirmarEliminacion(<?= $usuario['id_pelis'] ?>)">Eliminar</a>
                </td>
              </tr>
            <?php
            }
            ?>

          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
      <!-- FINALIZA TABLA -->
    </div>



  </div>
  <!-- FINALIZA CONTENEDOR-->




  <script src="code.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>