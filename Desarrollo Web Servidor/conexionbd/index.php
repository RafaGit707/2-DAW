<!DOCTYPE html>
<html lang="es">
<head>
    <title>Listado de Tareas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <nav class="topheader">
        <h1>Listado de Tareas</h1>
        <?php if (isset($_SESSION['usuario'])): ?>
            <img class="img" src="<?php echo htmlspecialchars($_SESSION['usuario']['avatar']); ?>" alt="Avatar" class="avatar">
        <?php else: ?>
            <a class="iniciar_sesion" href="#mostrar">Iniciar Sesión</a>
        <?php endif; ?>
    </nav>

    <div id="mostrar" class="container">
        <div class="fondo"></div>
        <div class="contenido">
            <form class="form-container" method="POST" action="index.php">
            <h1>Iniciar sesión</h1>

            <div class="form-group">
                <label for="nick">Nick</label>
                <input type="text" id="nick" name="nick" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" autocomplete="off" required>
            </div>
            <button class="submit-btn" type="submit" name="login">Iniciar sesión</button>
            <div id="error_message">
                <?php if (isset($errorLogin)) echo "<p class='message'>$errorLogin</p>"; ?>
            </div>

            <p class="cuenta_p">¿No tienes cuenta?  <a href="#registro" class="registrarse">Registrarse</a></p>
            <a id="cerrar" class="cerrar" href="#"><img src="images/X-purple.png" class="X1" id="X1"></a>
            </form>
        </div>
    </div>
    
    <div id="registro" class="container">
      <div class="fondo"></div>
      <div class="contenido">
        <form class="form-container" method="POST" action="index.php">
        <h1>Registrarse</h1>

        <div class="form-group">
            <label for="nick">Nick</label>
            <input type="text" id="nick" name="nick" autocomplete="off" required>
        </div>
        <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required><br>
            </div>
        <div class="form-group">
            <label for="password2">Confirmar Contraseña</label>
            <input type="password" id="password2" name="password2" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" id="avatar" name="avatar" required>
        </div>
        <div id="error_message">
            <?php if (isset($errorRegistro)) echo "<p class='message'>$errorRegistro</p>"; ?>
            <?php if (isset($mensajeRegistro)) echo "<p class='message'>$mensajeRegistro</p>"; ?>
        </div>

        <button class="submit-btn" type="submit" name="register">Registrarse</button>
        <p class="cuenta_p">¿Tienes cuenta? <a href="#mostrar" class="registrarse">Iniciar Sesion</a></p>
        <a id="cerrar" class="cerrar" href="#"><img src="images/X-purple.png" class="X1" id="X1"></a>
        </form>
      </div>
    </div>
    
    <main>
    <a href="nuevaTarea.php">Crear Nueva Tarea</a>
        <ul class="tareas">
            <?php foreach ($tareas as $tarea): ?>
                <li>
                    <strong><?php echo htmlspecialchars($tarea->getNombre()); ?></strong>
                    <span>Finaliza el: <?php echo htmlspecialchars($tarea->getFechaFinalizacion()); ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>

    <?php
require_once 'tareaService.php';
require_once 'usuarioService.php';

session_start();

$conexion = conexionBD();
if ($conexion) {
    echo "Conexión exitosa.";
    echo "<p>Conexión exitosa.</p>";
} else {
    echo "Error en la conexión.";
    echo "<p>Error en la conexión.</p>";
}

if (isset($_POST['login'])) {
    $nick = $_POST['nick'];
    $password = $_POST['password'];

    try {
        $usuario = verificarUsuario($nick, $password);
        
        if ($usuario) {
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php');
            exit();
        } else {
            $errorLogin = 'Usuario o contraseña incorrectos.';
        }
    } catch (Exception $e) {
        $errorLogin = 'Error al procesar la solicitud: ' . $e->getMessage();
    }
}

if (isset($_POST['register'])) {
    $nick = $_POST['nick'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $avatar = $_FILES['avatar'];

    if ($password !== $password2) {
        $errorRegistro = 'Las contraseñas no coinciden';
    } else {
        // Verifica si el archivo de avatar es válido
        if ($avatar['error'] === 0) {
            $usuarioId = registrarUsuario($nick, $password, $avatar);

            if ($usuarioId) {
                $mensajeRegistro = 'Usuario registrado exitosamente';
            } else {
                $errorRegistro = 'Hubo un error al registrar el usuario';
            }
        } else {
            $errorRegistro = 'Error al cargar el avatar';
        }
    }
}

$tareas = obtenerTareas($_SESSION['usuario']['id']);
?>
</body>
</html>