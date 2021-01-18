<?php


// Parámetros de configuración MySQL

$host = "localhost";
$usuario = "root";
$password = "";
$baseDatos = "cine";

$BD = new mysqli($host, $usuario, $password, $baseDatos);

// Esta función registra a un nuevo usuario
function registrarUsuario($usuario, $BD)
{
    $noticias = 0;
    if ($usuario['noticias'] === 'on') {
        $noticias = 1;
    }

    $query = "INSERT INTO usuario VALUES (NULL,'{$usuario['correo']}', '{$usuario['password']}', '{$usuario['nombre']}', '{$usuario['apellidos']}', '{$usuario['ciudad']}', '{$usuario['estado']}', '{$usuario['cp']}', '{$noticias}');";    
    $BD->query($query);
    printf("Nuevo registro con el id %d.\n", $BD->insert_id);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

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

function obtenerUsuario($id, $BD)
{
    $consulta = "SELECT *FROM USUARIO WHERE us = {$id}"; 
    $retorno = array();

    if ($resultado = $BD->query($consulta)) {
        while ($fila = $resultado->fetch_assoc()) {            
            array_push($retorno, $fila);
        }
    }

    return $retorno[0];
}

function verificar($correo, $BD)
{
    $consulta = "SELECT *FROM USUARIO WHERE correo = '{$correo}'"; 
    $retorno = array();

    if ($resultado = $BD->query($consulta)) {
        while ($fila = $resultado->fetch_assoc()) {            
            array_push($retorno, $fila);
        }
    }

    if (count($retorno) != 0 ) {
        return $retorno[0];
    } else {
        return null;
    }
    

    
}
