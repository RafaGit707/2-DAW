<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Login</title>
    </head>
<body>

    <div id="login" class="container">
        <div class="fondo"></div>
        <div class="contenido">
            <form class="form-container" method="POST" action="index.php">
            <h1>Iniciar sesión</h1>

            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="number" id="telefono" name="telefono" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" autocomplete="off" required>
            </div>
            <button class="submit-btn" type="submit" name="login">Iniciar sesión</button>
            <div id="error_message">
                <?php if (isset($errorLogin)) echo "<p class='message'>$errorLogin</p>"; ?>
            </div>
            <p class="cuenta_p">¿No tienes cuenta?  <a href="register.php" class="registrarse">Registrarse</a></p>
            </form>
        </div>
    </div>
<?php
require_once 'funciones.php';
$conn = conexionBD();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $telefono = trim($_POST['telefono']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM usuarios WHERE telefono = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $telefono);
    $stmt->execute();
    $result = $stmt->get_result();
    $usuario = $result->fetch_assoc();

    if ($usuario && password_verify($password, $usuario['password'])) {
        $_SESSION['usuario'] = $usuario['id'];
        header("Location: index.php");
        exit;
    } else {
        $errorLogin = "Teléfono o contraseña incorrectos.";
    }

    $stmt->close();
}
$conn->close();
?>
</body>
</html>
