<?php
require_once 'usuario.php';

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



function verificarUsuario($nick, $password) {
    $conexion = conexionBD();
    if ($conexion === false) {
        throw new Exception('No se pudo conectar a la base de datos.');
    }

    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE nick = ?");
    if (!$stmt) {
        throw new Exception('Error al preparar la consulta: ' . $conexion->error);
    }

    $stmt->bind_param("s", $nick);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        if (password_verify($password, $usuario['password'])) {
            return $usuario;
        } else {
            throw new Exception('Contraseña incorrecta.');
        }
    } else {
        throw new Exception('Usuario no encontrado.');
    }

    return null;
}

function registrarUsuario($nick, $password, $avatar) {
    $conexion = conexionBD();
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Subir avatar
    if ($avatar['error'] == UPLOAD_ERR_OK) {
        $avatarName = 'uploads/' . basename($avatar['name']);
        move_uploaded_file($avatar['tmp_name'], $avatarName);
    } else {
        $avatarName = null;
    }

    $stmt = $conexion->prepare("INSERT INTO usuarios (nick, password, avatar) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nick, $passwordHash, $avatarName);
    $stmt->execute();
    
    return $conexion->insert_id; // Devuelve el ID del usuario creado
}

?>