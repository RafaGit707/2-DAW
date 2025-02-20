<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Lista de Contactos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <header>
        <img src="avatars/<?php echo $_SESSION['usuario_avatar']; ?>" alt="Avatar" class="avatar">
        <h1>Mis Contactos</h1>
    </header>

    <main>
        <section>
            <form method="GET" action="index.php">
                <input type="text" name="buscar" placeholder="Buscar contacto...">
                <button type="submit">Buscar</button>
            </form>
        </section>

        <section>
            <button onclick="document.getElementById('crearContactoDialog').showModal()">+ Añadir Contacto</button>

            <dialog id="crearContactoDialog">
                <form method="POST" action="index.php" enctype="multipart/form-data">
                    <h2>Crear Contacto</h2>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required>

                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="apellidos" id="apellidos" required>

                    <label for="telefono">Teléfono:</label>
                    <input type="text" name="telefono" id="telefono" required>

                    <label for="foto">Foto:</label>
                    <input type="file" name="foto" id="foto" required>

                    <button type="submit">Guardar</button>
                    <button type="button" onclick="document.getElementById('crearContactoDialog').close()">Cancelar</button>
                </form>
            </dialog>
        </section>

        <section>
            <h2>Contactos</h2>
            <ul>
                <?php foreach ($stmt->fetchAll() as $contacto): ?>
                    <li>
                        <a href="detalleContacto.php?id=<?php echo $contacto['id']; ?>">
                            <img src="fotos/<?php echo $contacto['foto']; ?>" alt="Foto de <?php echo $contacto['nombre']; ?>" class="contacto-foto">
                            <span><?php echo $contacto['nombre'] . " " . $contacto['apellidos']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>

<?php
    require_once 'funciones.php';
    session_start();

    // Verificar si el usuario está logueado
    if (!isset($_SESSION['usuario'])) {
        header("Location: login.php");
        exit;
    }

    $conn = conexionBD();
    $idUsuario = $_SESSION['usuario'];

    // Búsqueda de contactos
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['buscar'])) {
        $buscar = "%" . trim($_GET['buscar']) . "%";
        $query = "SELECT * FROM contactos WHERE id_usuario = ? AND (nombre LIKE ? OR apellidos LIKE ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('iss', $idUsuario, $buscar, $buscar);
    } else {
        $query = "SELECT * FROM contactos WHERE id_usuario = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $idUsuario);
    }
    $stmt->execute();
    $result = $stmt->get_result();

    // Crear contacto
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $telefono = trim($_POST['telefono']);
        $foto = $_FILES['foto'];

        // Subida segura de la foto
        $fotoDir = "fotos/";
        $fotoNombre = uniqid() . "_" . basename($foto['name']);
        $fotoRuta = $fotoDir . $fotoNombre;

        if (move_uploaded_file($foto['tmp_name'], $fotoRuta)) {
            $query = "INSERT INTO contactos (nombre, apellidos, telefono, foto, id_usuario) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('ssssi', $nombre, $apellidos, $telefono, $fotoNombre, $idUsuario);
            $stmt->execute();
            header("Location: index.php");
            exit;
        } else {
            echo "<p class='error'>Error al subir la foto. Inténtalo nuevamente.</p>";
        }
    }
    ?>
</body>
</html>
