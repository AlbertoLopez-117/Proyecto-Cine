<?php
$usu=$_POST['corre0'];
$pass=$_POST['password'];

session_start();
$_SESSION['usuario']=$usu;

$conexion = mysqli_connect("localhost","root","","cine");

$consulta="SELECT * from usuario where correo = '$usu' and password = '$pass'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas) {
    header("location:AgregarPelis.php");
}else {
    ?>
    <?php
    include("login.php");
    ?>
    <center>
    <h1 class="bad">ERROR CORREO O CONTRASEÑA INCORRECTOS</h1>
    </center>
    
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);


