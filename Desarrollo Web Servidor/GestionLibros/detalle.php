<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Detalle del Libro</title>
    </head>
<body>
    
    <?php
    $titulo = isset($_GET['titulo']) ? $_GET['titulo'] : 'Desconocido';
    $autor = isset($_GET['autor']) ? $_GET['autor'] : 'Desconocido';
    $anio = isset($_GET['anio']) ? $_GET['anio'] : 'Desconocido';
    ?>

    <div id="detalle">
        <h1><?= $titulo ?></h1>
        <p><strong>Autor:</strong> <?= $autor ?></p>
        <p><strong>Año de publicación:</strong> <?= $anio ?></p>
        <a href="libro.php">Volver a la lista de libros</a>
    </div>
</body>
</html>
