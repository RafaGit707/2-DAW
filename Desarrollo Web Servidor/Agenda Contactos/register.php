<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Register</title>
    </head>
<body>
<div id="register" class="container">
      <div class="fondo"></div>
      <div class="contenido">
        <form class="form-container" method="POST" action="index.php">
        <h1>Registrarse</h1>

        <div class="form-group">
            <label for="nick">Telefono</label>
            <input type="number" id="telefono" name="telefono" autocomplete="off" required>
        </div>
        <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required><br>
            </div>
        <div class="form-group">
            <label for="password2">Confirmar Contraseña</label>
            <input type="password" id="password2" name="password2" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" id="avatar" name="avatar" accept="image/*" required>
        </div>
        <div id="error_message">
            <?php if (isset($errorRegistro)) echo "<p class='message'>$errorRegistro</p>"; ?>
            <?php if (isset($mensajeRegistro)) echo "<p class='message'>$mensajeRegistro</p>"; ?>
        </div>

        <button class="submit-btn" type="submit" name="register">Registrarse</button>
        <p class="cuenta_p">¿Tienes cuenta? <a href="login.php" class="registrarse">Iniciar Sesion</a></p>
        </form>
      </div>
    </div>

    <?php
require_once 'funciones.php';
$conn = conexionBD();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $telefono = trim($_POST['telefono']);
    $password = trim($_POST['password']);
    $password2 = trim($_POST['password2']);
    $avatar = $_FILES['avatar'];

    // Validar contraseñas coinciden
    if ($password !== $password2) {
        $errorRegistro = "Las contraseñas no coinciden.";
    } else {
        // Verificar si el número ya existe
        $query = "SELECT * FROM usuarios WHERE telefono = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $telefono);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $errorRegistro = "El teléfono ya está en uso.";
        } else {
            // Subir avatar
            $avatarDir = "avatars/";
            $avatarName = uniqid() . "_" . basename($avatar['name']);
            $avatarPath = $avatarDir . $avatarName;

            if (move_uploaded_file($avatar['tmp_name'], $avatarPath)) {
                // Insertar en la base de datos
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO usuarios (telefono, password, avatar) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('sss', $telefono, $passwordHash, $avatarName);

                if ($stmt->execute()) {
                    $mensajeRegistro = "Registro exitoso. Redirigiendo a la página de inicio de sesión...";
                    header("Refresh: 2; URL=login.php");
                } else {
                    $errorRegistro = "Error al registrar al usuario. Intenta nuevamente.";
                }
            } else {
                $errorRegistro = "Error al subir el avatar.";
            }
        }
    }

    $stmt->close();
}
$conn->close();
?>
</body>
</html>

