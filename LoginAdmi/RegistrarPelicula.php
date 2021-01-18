<?php
 
include('config.php');
session_start();
if (isset($_POST['register'])) {
    
    $titulo = $_POST['titulo'];
    $Director = $_POST['Director'];
    $Sinopsis = $_POST['sinopsis'];
    $Duracion = $_POST['duracion'];
    $genero = $_POST['genero'];
    $estreno =  date("Y/m/d", strtotime($_POST['estreno']));
    $inicio = $_POST['inicio'];
    $salida = $_POST['salida'];
    $poster = $_POST['poster'];
    $trailer = $_POST['trailer'];
    $pagina = $_POST['pagina'];
    $idioma = $_POST['idioma'];
    $origen = $_POST['origen'];
    $estudio = $_POST['estudio'];

    $query = $connection->prepare("SELECT * FROM PELICULAS WHERE titulo=:TITULO and estudioproductor=:ESTUDIO and fechaEstreno=:INICIO");
    $query->bindParam("TITULO", $titulo, PDO::PARAM_STR);
    $query->bindParam("ESTUDIO", $estudio, PDO::PARAM_STR);
    $query->bindParam("INICIO", $inicio, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        header('Location:AgregarPelis.php?res=0');
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO `peliculas` (`titulo`, `director`, `sinopsis`
        , `duracion`,`genero`, `fechaEstreno`, `fechaCartele`, `Fechafincartelera`, `URLposter`, `URLtrailer`
        , `URLweboficial`, `idiomas`, `paisorigen`, `estudioproductor`) 
        VALUES (:TITULO, :DIRECTOR, :SINOPSIS, :DURACION,:GENERO, :ESTRENO, :INICIO, :FIN, :POSTER,:TRAILER, :WEB, :IDIOMAS,:PAISORIGEN, :ESTUDIO)");
        $query->bindParam("TITULO", $titulo, PDO::PARAM_STR);
        $query->bindParam("DIRECTOR", $Director, PDO::PARAM_STR);
        $query->bindParam("SINOPSIS", $Sinopsis, PDO::PARAM_STR);
        $query->bindParam("DURACION", $Duracion, PDO::PARAM_STR);
        $query->bindParam("GENERO", $genero, PDO::PARAM_STR);
        $query->bindParam("ESTRENO", $estreno, PDO::PARAM_STR);
        $query->bindParam("INICIO", $inicio, PDO::PARAM_STR);
        $query->bindParam("FIN", $salida, PDO::PARAM_STR);
        $query->bindParam("POSTER", $poster, PDO::PARAM_STR);
        $query->bindParam("TRAILER", $trailer, PDO::PARAM_STR);
        $query->bindParam("WEB", $pagina, PDO::PARAM_STR);
        $query->bindParam("IDIOMAS", $idioma, PDO::PARAM_STR);
        $query->bindParam("PAISORIGEN", $origen, PDO::PARAM_STR);
        $query->bindParam("ESTUDIO", $estudio, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            
          header('Location:Login.php?res=1');
        } else {
            header('Location:signin.php?res=2');
        }
    }
}else{
    header('Location:AgregarPelis.php?res=2');
}
 
?>