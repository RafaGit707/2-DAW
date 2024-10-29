<?php
require_once 'coche.php';
require_once 'funciones.php';

session_start();

$modelo = isset($_GET['modelo']) ? $_GET['modelo'] : '';
$precio_maximo = isset($_GET['precio_maximo']) ? $_GET['precio_maximo'] : '';

$coches = getCoches();
$coches_filtrados = filtrarCoches($coches, $modelo, $precio_maximo);

$modelos = getModelos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Alquiler de Coches</title>
</head>
<body>
    <h1>Alquiler de Coches</h1>

    <div class="container">
        <form class="form-filtrar" method="GET" action="">
            <select name="modelo">
                <option value="">Todos los modelos</option>
                <?php foreach ($modelos as $mod): ?>
                    <option value="<?= $mod->id ?>" <?= $modelo == $mod->id ? 'selected' : '' ?>><?= $mod->nombre ?></option>
                <?php endforeach; ?>
            </select>

            <input type="number" name="precio_maximo" placeholder="Precio máximo" value="<?= htmlspecialchars($precio_maximo) ?>">

            <button type="submit">Filtrar</button>
        </form>

        <h2>Listado de Coches</h2>
        <?php if (!empty($coches_filtrados)): ?>
            <?php foreach ($coches_filtrados as $coche): ?>
                <div class="vehiculo">
                    <img src="<?= htmlspecialchars($coche->imagen) ?>" alt="Imagen de <?= htmlspecialchars($coche->modelo->nombre) ?>" width="150">
                    <div>
                        <p><strong>Modelo:</strong> <?= htmlspecialchars($coche->modelo->nombre) ?></p>
                        <p><strong>Color:</strong> <?= htmlspecialchars($coche->color) ?></p>
                        <p><strong>Precio por día:</strong> <?= htmlspecialchars($coche->precio) ?> €</p>
                    </div>
                    <form action="alquilarvehiculo.php" method="GET">
                        <input type="hidden" name="id" value="<?= $coche->id ?>">
                        <button type="submit">Alquilar</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No se encontraron coches disponibles</p>
        <?php endif; ?>
    </div>
</body>
</html>
