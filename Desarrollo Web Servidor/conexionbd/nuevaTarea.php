<?php
require_once 'tareaService.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $fecha_finalizacion = $_POST['fecha_finalizacion'];
    $id_usuario = $_SESSION['usuario']['id'];
    
    agregarTarea($nombre, $fecha_finalizacion, $id_usuario);
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Nueva Tarea</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Creación de Tarea</h1>
    <main>
    <a href="index.php">Listado Tarea</a>
        <form method="POST" action="">
            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" name="nombre" required>

            <label for="fecha_finalizacion">Fecha de Finalización</label>
            <input id="fecha_finalizacion" type="date" name="fecha_finalizacion" required>

            <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['usuario']['id']; ?>">

            <div class="operaciones">
                <input type="submit" value="Guardar">
            </div>
        </form>
    </main>
</body>
</html>
