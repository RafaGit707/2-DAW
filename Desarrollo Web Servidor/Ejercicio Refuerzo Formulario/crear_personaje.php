<?php
session_start();
require_once 'personaje.php';
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $clase = $_POST['clase'] ?? '';
    $raza = $_POST['raza'] ?? '';

    if (empty($nombre) || empty($clase) || empty($raza)) {
        $error = "Todos los campos son obligatorios.";
    } else {
        $personaje = new Personaje($nombre, $clase, $raza);
        $_SESSION['personaje'] = serialize($personaje);
        header("Location: habilidades.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Personaje</title>
</head>
<body>
    <h1>Crear Personaje</h1>
    <?php if ($error): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
    <form method="post">
        <label>Nombre: <input type="text" name="nombre" required></label><br><br>

        <label>Clase:
            <select name="clase" required>
                <option value="mago">Mago</option>
                <option value="guerrero">Guerrero</option>
                <option value="ladron">Ladrón</option>
            </select>
        </label><br><br>

        <label>Raza:</label>
        <label><input type="radio" name="raza" value="humano" required> Humano</label>
        <label><input type="radio" name="raza" value="elfo"> Elfo</label>
        <label><input type="radio" name="raza" value="enano"> Enano</label><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
