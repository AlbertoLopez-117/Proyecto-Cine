<?php
$correo=$_POST['corre0'];
$pass=$_POST['password'];

session_start();
$_SESSION['usuario']=$correo;

$conexion=mysqli_connect("localhost","Alberto","Albertolopez117","cine2");

//Consulta para Iniciar sesion como Administrador
$admi="SELECT * from usuario where correo = '$correo' and pass = '$pass' and tipo_usu = 'ADMIN' ";
$resultado = mysqli_query($conexion, $admi);
$filas = mysqli_num_rows($resultado);

//Consulta para Iniciar sesion como cliente
$cliente="SELECT * from usuario where correo = '$correo' and pass = '$pass' and tipo_usu = 'CLIENTE' ";
$resultado2 = mysqli_query($conexion, $cliente);
$filas2 = mysqli_num_rows($resultado2);

//Consulta para Iniciar sesion como de cartelera
$cartelera="SELECT * from usuario where correo = '$correo' and pass = '$pass' and tipo_usu = 'CARTELERA' ";
$resultado3 = mysqli_query($conexion, $cartelera);
$filas3 = mysqli_num_rows($resultado3);



if ($filas) {
    header("location:AgregarPelis.php");
    mysqli_free_result($resultado);
    mysqli_close($conexion);
}elseif ($filas2) {
    header("location:../html/Preventa.html");
    mysqli_free_result($resultado);
    mysqli_close($conexion);
}elseif ($filas3) {
    header("location:AgregarPelis.php");
    mysqli_free_result($resultado);
    mysqli_close($conexion);
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