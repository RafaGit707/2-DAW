<?php
session_start();
require_once 'personaje.php';

if (!isset($_SESSION['personaje'])) {
    header("Location: crear_personaje.php");
    exit;
}

$personaje = unserialize($_SESSION['personaje']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficha del Personaje</title>
</head>
<body>
    <h1>Ficha del Personaje</h1>
    <p><strong>Nombre:</strong> <?= htmlspecialchars($personaje->getNombre()) ?></p>
    <p><strong>Clase:</strong> <?= ucfirst($personaje->getClase()) ?></p>
    <p><strong>Raza:</strong> <?= ucfirst($personaje->getRaza()) ?></p>
    
    <h2>Habilidades:</h2>
    <ul>
        <?php foreach ($personaje->getHabilidades() as $habilidad): ?>
            <li><?= htmlspecialchars($habilidad) ?></li>
        <?php endforeach; ?>
    </ul>
    
    <h2>Especialización:</h2>
    <p><?= htmlspecialchars($personaje->getEspecializacion()) ?></p>
    
    <a href="crear_personaje.php">Crear otro personaje</a>
</body>
</html>
