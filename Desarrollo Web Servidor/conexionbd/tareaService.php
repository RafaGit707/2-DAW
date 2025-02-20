<?php
require_once 'tarea.php';

function conexionBD() {
    $host = 'localhost';
    $basededatos = 'migtd';
    $usuario = 'root';
    $password = '';
    
    $conexion = new mysqli($host, $usuario, $password, $basededatos);

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    return $conexion;
}

function obtenerTareas($idUsuario) {
    $conexion = conexionBD();
    $sql = "SELECT * FROM tareas WHERE id_usuario = ?";
    $resultado = $conexion -> query($sql);

    $tareas = [];
    while ($fila = $resultado -> fetch_assoc()) {
        $tareas[] = new Tarea ($fila['id'], $fila['nombre'], $fila['fecha_finalizacion']);
    }
    
    $conexion -> close();
    return $tareas;
}

function crearTarea($nombre, $fechaFinalizacion, $idUsuario) {
    $conexion = conexionBD();
    
    $stmt = $conexion->prepare("INSERT INTO tareas (nombre, fecha_finalizacion, id_usuario) VALUES (?, ?, ?)");
    
    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $conexion->error);
    }

    $stmt->bind_param("ssi", $nombre, $fechaFinalizacion, $idUsuario);

    if ($stmt->execute()) {
        echo "Tarea creada exitosamente";
    } else {
        echo "Error al crear la tarea: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}

?>