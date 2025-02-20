<?php
session_start();
require_once 'personaje.php';

if (!isset($_SESSION['personaje'])) {
    header("Location: crear_personaje.php");
    exit;
}

$personaje = unserialize($_SESSION['personaje']);
$habilidades = $personaje->getHabilidades();
$especializaciones = $personaje->getEspecializaciones();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $personaje->setHabilidades($_POST['habilidad'] ?? []);
    $personaje->setEspecializacion($_POST['especializacion'] ?? '');
    $_SESSION['personaje'] = serialize($personaje);
    header("Location: ficha_personaje.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Habilidades y Especializaciones</title>
</head>
<body>
    <h1>Habilidades y Especializaciones de <?= ucfirst($personaje->getClase()) ?></h1>

    <form method="post">
        <h2>Habilidades:</h2>
        <?php foreach ($habilidades as $habilidad): ?>
            <label><input type="checkbox" name="habilidad[]" value="<?= $habilidad ?>"> <?= $habilidad ?></label><br>
        <?php endforeach; ?>

        <h2>Especialización:</h2>
        <?php foreach ($especializaciones as $especializacion): ?>
            <label><input type="radio" name="especializacion" value="<?= $especializacion ?>" required> <?= $especializacion ?></label><br>
        <?php endforeach; ?>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
