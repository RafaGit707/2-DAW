<?php
require_once 'videojuego.php';
require_once 'funciones.php';

session_start();

$titulo = isset($_GET['titulo']) ? $_GET['titulo'] : '';
$categoria_id = isset($_GET['categoria']) ? $_GET['categoria'] : '';
$desarrolladora_id = isset($_GET['desarrolladora']) ? $_GET['desarrolladora'] : '';

$videojuegos = getVideojuegos();

$videojuegos_filtrados = filtrarVideojuegos($videojuegos, $titulo, $categoria_id, $desarrolladora_id);

$categorias = getCategorias();
$desarrolladoras = getDesarrolladoras();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Gestión de Videojuegos</title>
</head>
<body>
    <h1>Gestión de Videojuegos</h1>

    <form method="GET" action="">
        <input type="text" name="titulo" placeholder="Título del videojuego" value="<?= $titulo ?>">
        
        <select name="categoria">
            <option value="">Todas las categorías</option>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?= $categoria->id ?>" <?= $categoria_id == $categoria->id ? 'selected' : '' ?>><?= $categoria->nombre ?></option>
            <?php endforeach; ?>
        </select>

        <select name="desarrolladora">
            <option value="">Todas las desarrolladoras</option>
            <?php foreach ($desarrolladoras as $desarrolladora): ?>
                <option value="<?= $desarrolladora->id ?>" <?= $desarrolladora_id == $desarrolladora->id ? 'selected' : '' ?>><?= $desarrolladora->nombre ?></option>
            <?php endforeach; ?>
        </select>

        <button class="filtrar" type="submit">Filtrar</button>
    </form>

    <h2>Listado de Videojuegos</h2>
    <table>
        <tr>
            <th>Título</th>
            <th>Fecha de Publicación</th>
            <th>Categoría</th>
            <th>Desarrolladora</th>
        </tr>
        <?php if (!empty($videojuegos_filtrados)): ?>
            <?php foreach ($videojuegos_filtrados as $videojuego): ?>
                <tr>
                    <td><a href="detalleVideojuego.php?id=<?= $videojuego->id ?>"><?= $videojuego->titulo ?></a></td>
                    <td><?= $videojuego->fecha_publicacion ?></td>
                    <td><?= $videojuego->categoria->nombre ?></td>
                    <td><?= $videojuego->desarrolladora->nombre ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No se encontraron videojuegos</td>
            </tr>
        <?php endif; ?>
    </table>

    <a class="nuevoVideojuego" href="nuevoVideojuego.php">Nuevo Videojuego</a>
</body>
</html>
