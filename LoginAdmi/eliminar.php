<?php
include('config.php');
session_start();
$id=  isset($_GET["id"]);
        $query = $connection->prepare("DELETE FROM `cine`.`peliculas` WHERE `id_pelis` = 'ID';");
        $query->bindParam("ID", $$id, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {       
          header('Location:peliculas.php?res=4');
        } else {
            header('Location:peliculas.php?res=5');
        }
?>