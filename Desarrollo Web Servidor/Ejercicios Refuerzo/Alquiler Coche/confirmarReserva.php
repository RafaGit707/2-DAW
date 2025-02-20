<?php
require_once 'coche.php';
require_once 'funciones.php';

session_start();

$id = $_POST['id'] ?? null;
$dias = isset($_POST['dias']) ? (int)$_POST['dias'] : 1;

$coche = obtenerCochePorId($id);

if (!$coche) {
    echo "Coche no encontrado";
    exit();
}

$total = $dias * $coche->precio;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reserva Confirmada</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="vehiculo">
    <div class="container">
        <h1>Reserva Confirmada</h1>

        <img src="<?= htmlspecialchars($coche->imagen) ?>" alt="Imagen de <?= htmlspecialchars($coche->modelo->nombre) ?>" width="200">
        <p>Has alquilado el modelo <?= htmlspecialchars($coche->modelo->nombre) ?> por <?= $dias ?> días.</p>
        <p>El precio total es: <?= htmlspecialchars($total) ?> €</p>

        <a href="indexVehiculos.php" class="button">Volver</a>
    </div>
</div>
</body>
</html>
