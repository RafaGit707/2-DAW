<?php
require_once 'usuario.php';

function conexionBD() {
    $host = 'localhost';
    $basededatos = 'agenda';
    $usuario = 'root';
    $password = '';
    
    $conexion = new mysqli($host, $usuario, $password, $basededatos);

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    return $conexion;
}
?>