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
    <div class="text-center">
    <h1 class="text-white">Crear cuenta</h1>
 </div>
    <div class="col-md-6 col-sm-12 ">

        <form action="RegistrarCliente.php" method="post" autocomplete="on" name="signin-form">

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputTitulo" style="color: white;">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" id="name" placeholder="Nombre" autofocus required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputdirec" style="color: white;">Apellido paterno</label>
                    <input type="text" class="form-control" name="Apellidopaterno" id="lastname" placeholder="Apellido paterno">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputdirec" style="color: white;">Apellido Materno</label>
                    <input type="text" class="form-control" name="ApellidoMaterno" placeholder="Apellido Materno" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputSinopsis" style="color: white;">email</label>
                <input type="email" class="form-control" name="email" placeholder="email" required>
            </div>
            <div class="form-group">
                <label for="inputDuracion" style="color: white;">Contraseña</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="inputEstreno" style="color: white;">Direccion</label>
                <input type="text" class="form-control" name="Direccion" placeholder="Direccion" required>
            </div>
            <div class="form-group">
                <label for="inputInicio" style="color: white;">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fnacimiento"
                 max=<?php $hoy=date("Y-m-d"); $nuevafecha = 
                 strtotime ('-12 year' , strtotime($hoy)); $nuevafecha = date ('Y-m-d',$nuevafecha); echo $nuevafecha;?>
                  min=<?php $hoy=date("Y-m-d"); $nuevafecha = strtotime ('-90 year' , strtotime($hoy)); $nuevafecha 
                  = date ('Y-m-d',$nuevafecha); echo $nuevafecha;?>>
            </div>
            <div class="form-group">
                <label for="inputSalida" style="color: white;">Celular</label>
                <input type="number" class="form-control" name="numero" maxlength="10" placeholder="Celular" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-dark" name="register" value="register" id="register">Registrase</button>
            </div>
        </form>
        <?php
if (isset($_GET["res"]) && $_GET["res"]==0) {
    echo ('<div class="form-group"> <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>CORREO YA EN USO!</strong> YA HAY UNA CUENTA CON ESTE CORREO
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
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>