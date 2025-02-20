<?php
require_once 'usuario.php';
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email === 'alumno@ies.com' && $password === 'alumno') {
        $_SESSION['usuario'] = new Usuario($email, 'alumno');
        header("Location: indexUsuarios.php");
        exit();
    } elseif ($email === 'profesor@ies.com' && $password === 'profesor') {
        $_SESSION['usuario'] = new Usuario($email, 'profesor');
        header("Location: indexUsuarios.php");
        exit();
    } else {
        $error = 'Credenciales incorrectas.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <div class="container_login">
        <div class="fondo"></div>
        <form class="form-container" method="POST" action="">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <button class="submit-btn" type="submit">Iniciar sesión</button>
            <?php if ($error): ?>
                <p style="color: red;"><?= htmlspecialchars($error) ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
