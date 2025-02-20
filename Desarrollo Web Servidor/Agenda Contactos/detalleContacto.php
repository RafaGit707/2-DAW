<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Contacto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <img src="avatars/<?php echo $_SESSION['usuario_avatar']; ?>" alt="Avatar" class="avatar">
        <h1>Detalle del Contacto</h1>
    </header>

    <main>
        <section class="contacto-detalle">
            <img src="fotos/<?php echo $contacto['foto']; ?>" alt="Foto de <?php echo $contacto['nombre']; ?>" class="contacto-foto">
            <h2><?php echo $contacto['nombre'] . " " . $contacto['apellidos']; ?></h2>
            <p>Teléfono: <?php echo $contacto['telefono']; ?></p>
        </section>

        <section class="mensajes">
            <h3>Mensajes</h3>
            <ul>
                <?php foreach ($mensajes as $mensaje): ?>
                    <li>
                        <p><?php echo $mensaje['texto']; ?></p>
                        <small><?php echo $mensaje['fecha_envio']; ?></small>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section>
            <form method="POST" action="detalleContacto.php?id=<?php echo $contacto['id']; ?>">
                <label for="mensaje">Escribir mensaje:</label>
                <input type="text" name="mensaje" id="mensaje" required>
                <button type="submit">Enviar mensaje</button>
            </form>
        </section>
    </main>
<?php
require_once 'funciones.php';
$conn = conexionBD();

session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

$idContacto = $_GET['id'] ?? null;

if ($idContacto) {
    $query = "SELECT * FROM contactos WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$idContacto]);
    $contacto = $stmt->fetch_assoc();

    if (!$contacto) {
        echo "El contacto no existe.";
        exit;
    }
}
?>
</body>
</html>
