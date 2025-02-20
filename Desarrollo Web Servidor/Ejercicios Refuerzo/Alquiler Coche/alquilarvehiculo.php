<?php
require_once 'coche.php';
require_once 'funciones.php';

session_start();

$id = $_GET['id'] ?? null;
$coche = obtenerCochePorId($id);

if (!$coche) {
    echo "Coche no encontrado";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmar Alquiler</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
    <h1>Confirmar Alquiler</h1>
        <div class="vehiculo">
            <img src="<?= htmlspecialchars($coche->imagen) ?>" alt="Imagen de <?= htmlspecialchars($coche->modelo->nombre) ?>" width="200">
            <div>
                <p><strong>Modelo:</strong> <?= htmlspecialchars($coche->modelo->nombre) ?></p>
                <p><strong>Color:</strong> <?= htmlspecialchars($coche->color) ?></p>
                <p><strong>Precio por día:</strong> <?= htmlspecialchars($coche->precio) ?> €</p>
            </div>
        </div>

        <form class="form-reserva" method="POST" action="confirmarReserva.php">
            <label for="dias">Número de días:</label>
            <input type="number" name="dias" min="1" required>
            <input type="hidden" name="id" value="<?= htmlspecialchars($coche->id) ?>">
            <button type="submit">Confirmar Reserva</button>
        </form>

        <a href="indexVehiculos.php" class="button">Volver a la lista</a>
    </div>
</body>
</html>
