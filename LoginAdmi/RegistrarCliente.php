<?php
 
include('config.php');
session_start();
if (isset($_POST['register'])) {
    
    $nombre = $_POST['Nombre'];
    $paterno = $_POST['Apellidopaterno'];
    $materno = $_POST['ApellidoMaterno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Direccion = $_POST['Direccion'];
    $fnacimiento =  date("Y/m/d", strtotime($_POST['fnacimiento']));
    $numero = $_POST['numero'];
    $usuario = $_POST['usuario'];
    //$password_hash = password_hash($password, PASSWORD_BCRYPT);
    $password_hash=$password;
    $query = $connection->prepare("SELECT * FROM persona WHERE correo_per=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        header('Location:signin.php?res=0');
    }
 
    $query2 = $connection->prepare("SELECT * FROM usuario WHERE us=:USUARIO");
    $query2->bindParam("USUARIO", $usuario, PDO::PARAM_STR);
    $query2->execute();
    if ($query->rowCount() > 0) {
        header('Location:signin.php?res=3');
    }
    if ($query->rowCount() == 0 && $query2->rowCount() == 0) {
        $query = $connection->prepare("CALL RegistrarCliente(:NOMBRE,:PATERNO,:MATERNO,
        :DIRECCION,:NACIMIENTO,:CELULAR,:CORREO,:PASSWORD,:USUARIO)");
        $query->bindParam("NOMBRE", $nombre, PDO::PARAM_STR);
        $query->bindParam("PATERNO", $paterno, PDO::PARAM_STR);
        $query->bindParam("MATERNO", $materno, PDO::PARAM_STR);
        $query->bindParam("CORREO", $email, PDO::PARAM_STR);
        $query->bindParam("PASSWORD", $password_hash, PDO::PARAM_STR);
        $query->bindParam("DIRECCION", $Direccion, PDO::PARAM_STR);
        $query->bindParam("NACIMIENTO", $fnacimiento, PDO::PARAM_STR);
        $query->bindParam("CELULAR", $numero, PDO::PARAM_STR);
        $query->bindParam("USUARIO", $usuario, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            
          header('Location:Login.php?res=1');
        } else {
            header('Location:signin.php?res=2');
        }
    }
}else{
    header('Location:signin.php?res=2');
}
 
?>