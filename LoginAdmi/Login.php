<?php
require_once("BaseDatos.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<header class="navbar navbar-dark bg-dark">
    <div class="fondo-st">
        <br>
        <h1 class="fuente-st" style="color: white;">BIRD RED CINEMA</h1>

    </div>



</header>

<body class="bg-danger">
<center>
<br>
 <img src="https://identipets.com/login/img/icono_login.png" alt="">
 <br>
 <br>
 <br>
<form  action="Sesiones.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" style="color: white;">Email address</label>
    <input type="email" class="form-control" name="corre0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Electronico" style="width: 25em;">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color: white;">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Contraseña" style="width: 25em;">
  </div>
  
  <button type="submit" class="btn btn-dark">Iniciar sesion</button>
</form>
<?php
if (isset($_GET["res"]) && $_GET["res"]==1) {
    echo ('<div class="form-group"> <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Registrado correctamente!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  </div>');
}
?>
</center>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<footer style="background-image: url(resources/img/hed.jpg);">
    <center>
        <br>

        <table>
            <tr>
                <th>CARTELERA</th>
                <th>¿QUIENES SOMOS</th>
                <th>LEGAL</th>
            </tr>
            <tr>
                <td>
                    <a href="html/inicio.html" class="link">Cartelera</a><br>
                    <a href="html/ticket.html" class="link"> Preventa</a><br>
                    <a href="index.html" class="link"> Proximos estrenos</a><br>
                </td>
                <td>
                    <a href="signin.php" class="link">Registrarse</a>
                </td>
                <td>
                    <a href="resources/docs/Políticas de Privacidad Bir Red Cinema.pdf" class="link">Terminos y conciciones</a>
                </td>
            </tr>


        </table>
        <br><br>
        <img src="resources/img footer/paypal.png" alt="" class="img">
        <img src="resources/img footer/comerce.png" alt="" class="img">
        <img src="resources/img footer/ESR.png" alt="" class="img">
        <img src="resources/img footer/super empresas.png" alt="" class="img">
        <img src="resources/img footer/coca-cola.jpg" alt="" class="img">
        <img src="resources/Logo/Untitled.png" alt="" class="img">



    </center>

</footer>
</html>