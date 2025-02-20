<?php
require_once 'videojuego.php';
require_once 'funciones.php';

session_start();

$id = $_GET['id'];

$videojuegos = getVideojuegos();
$videojuego = null;

foreach ($videojuegos as $v) {
    if ($v->id == $id) {
        $videojuego = $v;
        break;
    }
}

if ($videojuego === null) {
    echo "Videojuego no encontrado.";
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Detalle del Videojuego</title>
</head>
<body>
    <div class="container">
        <div class="videojuego-details">
            <h1><?= $videojuego->titulo ?></h1>
            <p><strong>Fecha de Publicación:</strong> <?= $videojuego->fecha_publicacion ?></p>
            <p><strong>Categoría:</strong> <?= $videojuego->categoria->nombre ?></p>
            <p><strong>Desarrolladora:</strong> <?= $videojuego->desarrolladora->nombre ?></p>

            <a class="button" href="indexVideojuego.php">Volver al listado</a>
        </div>
    </div>
</body>
</html>
