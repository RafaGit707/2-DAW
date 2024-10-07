<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Productos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Tienda de Productos</h1>
        <nav>
            <a href="?id=Software">Software</a>
            <a href="?id=Hardware">Hardware</a>
            <a href="?id=Juegos">Juegos</a>
        </nav>
    </header>
    <section class="productos">
        <?php
        include_once 'productos.php';

        $seccion = $_GET['id'];
        $productos = obtenerProductosPorSeccion($seccion);
        
        foreach ($productos as $producto): ?>
            <div class="producto">
                <h2><?php echo $producto->getNombre(); ?></h2>
                <p><strong>Precio:</strong> <?php echo $producto->getPrecio(); ?>€</p>
                <p><strong>Descripción:</strong> <?php echo $producto->getDescripcion(); ?></p>
                <div class="comentarios">
                    <h3>Comentarios:</h3>
                    <?php foreach ($producto->getComentarios() as $comentario): ?>
                        <p><strong><?php echo $comentario->getUsuario(); ?>:</strong> <?php echo $comentario->getTexto(); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</body>
</html>