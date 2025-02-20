<?php
require_once 'videojuego.php';
require_once 'funciones.php';

session_start();

$categorias = getCategorias();
$desarrolladoras = getDesarrolladoras();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $fecha_publicacion = $_POST['fecha_publicacion'];
    $categoria_id = $_POST['categoria'];
    $desarrolladora_id = $_POST['desarrolladora'];

    if ($titulo && $fecha_publicacion && $categoria_id && $desarrolladora_id) {
        $categoria = getCategorias()[$categoria_id - 1];
        $desarrolladora = getDesarrolladoras()[$desarrolladora_id - 1];

        $videojuego = new Videojuego(null, $titulo, $fecha_publicacion, $categoria, $desarrolladora);

        agregarVideojuego($videojuego);

        header("Location: detalleVideojuego.php?id=" . $videojuego->id);
        exit();
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Crear Nuevo Videojuego</title>
</head>
<body>
    <h1>Nuevo Videojuego</h1>

    <form method="POST" action="">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br>

        <label for="fecha_publicacion">Fecha de Publicación:</label>
        <input type="date" name="fecha_publicacion" required><br>

        <label for="categoria">Categoría:</label>
        <select name="categoria" required>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?= $categoria->id ?>"><?= htmlspecialchars($categoria->nombre) ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="desarrolladora">Desarrolladora:</label>
        <select name="desarrolladora" required>
            <?php foreach ($desarrolladoras as $desarrolladora): ?>
                <option value="<?= $desarrolladora->id ?>"><?= htmlspecialchars($desarrolladora->nombre) ?></option>
            <?php endforeach; ?>
        </select><br>

        <button type="submit">Crear Videojuego</button>
    </form>
</body>
</html>
