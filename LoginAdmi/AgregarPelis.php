<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar peliculas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<header class="navbar navbar-dark bg-dark">
    <div class="fondo-st">
        <br>
        <h1 class="fuente-st" style="color: white;">BIRD RED CINEMA</h1>

    </div>



</header>
<body class="bg-danger">
<h1>Registro de peliculas </h1>
<div class="col-md-6 col-sm-12">

<form action="RegistrarPelicula.php" method="post">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTitulo" style="color: white;">Titulo</label>
      <input type="text" class="form-control" name="titulo" id="titulo" placeholder="titulo" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputdirec" style="color: white;">Director</label>
      <input type="text" class="form-control" name="Director" placeholder="Director" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputSinopsis" style="color: white;">Sinopsis</label>
    <input type="text" class="form-control" name="sinopsis" placeholder="sinopsis" required>
  </div>
  <div class="form-group">
    <label for="inputDuracion" style="color: white;">Duracion</label>
    <input type="number" class="form-control" name="duracion" required>
  </div>
  <div class="form-group">
    <label for="inputEstreno" style="color: white;">Fecha de Estreno</label>
    <input type="date" class="form-control" name="estreno" required min=<?php $hoy=date("Y-m-d"); echo($hoy);?>>
  </div>
  <div class="form-group">
    <label for="inputInicio" style="color: white;">Fecha de inicio en cartelera</label>
    <input type="date" class="form-control" name="inicio"min=<?php $hoy=date("Y-m-d"); echo($hoy);?> required>
  </div>
  <div class="form-group" >
    <label for="inputSalida" style="color: white;">Fecha de salidad de cartelera</label>
    <input type="DATE" class="form-control" name="salida"min=<?php $hoy=date("Y-m-d"); echo($hoy);?> required>
  </div>
  <div class="form-group">
    <label for="inputPoster" style="color: white;">URL de poster</label>
    <input type="url" class="form-control" name="poster" required>
  </div>
  <div class="form-group">
    <label for="inputTrailer" style="color: white;">URL del trailer</label>
    <input type="url" class="form-control" name="trailer" required>
  </div>
  <div class="form-group">
    <label for="inputPelicula" style="color: white;">URL de pagina de la pelicula</label>
    <input type="url" class="form-control" name="pagina" required>
  </div>
  <div class="form-group">
    <label for="inputIdioma" style="color: white;" >Idioma</label>
    <input type="text" class="form-control" name="idioma" required>
  </div>
  <div class="form-group">
    <label for="inputOrigen" style="color: white;">Pais de origen</label>
    <input type="text" class="form-control" name="origen" required>
  </div>
  <div class="form-group">
    <label for="inputEstudio"style="color: white;">Estudio productor</label>
    <input type="text" class="form-control" name="estudio" required>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-dark" name="register" value="register">Registrar pelicula</button>
</form>
</div>

<?php
if (isset($_GET["res"]) && $_GET["res"]==0) {
    echo ('<div class="form-group"> <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>PELICULA YA REGISTRADA!</strong> YA HAY UNA PELICULA REGISTRADA CON EL MISMO TITULO Y STUDIO
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  </div>');
}
if (isset($_GET["res"]) && $_GET["res"]==2) {
    echo ('<div class="form-group"> <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>SE PRODUJO UN ERROR!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  </div>');
}
?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>