<?php
 
include('config.php');
session_start();
if (isset($_POST['register'])) {
    
    $id= $_POST['id'];
    $titulo = $_POST['titulo'];
    $Director = $_POST['director'];
    $Sinopsis = $_POST['sinopsis'];
    $Duracion = $_POST['duracion'];
    $genero = $_POST['genero'];
    $estreno =  date("Y/m/d", strtotime($_POST['fechaEstreno']));
    $inicio = $_POST['fechaCartele'];
    $salida = $_POST['Fechafincartelera'];
    $poster = $_POST['URLposter'];
    $trailer = $_POST['URLtrailer'];
    $pagina = $_POST['URLweboficial'];
    $idioma = $_POST['idiomas'];
    $origen = $_POST['paisorigen'];
    $estudio = $_POST['estudioproductor'];

    
    
        $query = $connection->prepare("UPDATE `cine`.`peliculas` SET `titulo` = :TITULO, `director` = :DIRECTOR, `sinopsis` = :SINOPSIS,
           `duracion` = :DURACION, `genero` = :GENERO, `fechaEstreno` = ".$estreno.",
            `fechaCartele` = ".$inicio.", `Fechafincartelera` = ".$salida.",
             `URLposter` = :POSTER,
              `URLtrailer` = :TRAILER, `URLweboficial` = :PAGINA, `idiomas` = :IDIOMA,
               `paisorigen` = :ORIGEN, `estudioproductor` = :ESTUDIO WHERE (`id_pelis` = :ID);
        ");
        $query->bindParam("TITULO", $titulo, PDO::PARAM_STR);
        $query->bindParam("DIRECTOR", $Director, PDO::PARAM_STR);
        $query->bindParam("SINOPSIS", $Sinopsis, PDO::PARAM_STR);
        $query->bindParam("DURACION", $Duracion, PDO::PARAM_STR);
        $query->bindParam("GENERO", $genero, PDO::PARAM_STR);
        //$query->bindParam("ESTRENO", $estreno, PDO::PARAM_STR);
       // $query->bindParam("INICIO", $inicio, PDO::PARAM_STR);
//$query->bindParam("FIN", $salida, PDO::PARAM_STR);
        $query->bindParam("POSTER", $poster, PDO::PARAM_STR);
        $query->bindParam("TRAILER", $trailer, PDO::PARAM_STR);
        $query->bindParam("PAGINA", $pagina, PDO::PARAM_STR);
        $query->bindParam("IDIOMA", $idioma, PDO::PARAM_STR);
        $query->bindParam("ORIGEN", $origen, PDO::PARAM_STR);
        $query->bindParam("ESTUDIO", $estudio, PDO::PARAM_STR);
        $query->bindParam("ID", $id, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            
          header('Location:peliculas.php?res=1');
        } else {
            header('Location:peliculas.php?res=2');
        }
    
}else{
    header('Location:peliculas.php?res=3');
}
 
?>