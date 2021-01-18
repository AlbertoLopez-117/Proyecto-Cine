<?php


// Parámetros de configuración MySQL

$host = "localhost";
$usuario = "root";
$password = "";
$baseDatos = "cine";

$BD = new mysqli($host, $usuario, $password, $baseDatos);

function obtenerTodos($tabla, $BD)
{
    $consulta = "SELECT * FROM {$tabla}"; 
    $retorno = array();

    if ($resultado = $BD->query($consulta)) {
        
        while ($fila = $resultado->fetch_assoc()) {            
            array_push($retorno, $fila);
        }
    }

    return $retorno;
}

function getPelicula($id, $BD)
{
    $consulta = "SELECT *FROM peliculas WHERE id_pelis = {$id}"; 
    $retorno = array();

    if ($resultado = $BD->query($consulta)) {
        while ($fila = $resultado->fetch_assoc()) {            
            array_push($retorno, $fila);
        }
    }

    return $retorno[0];
}

