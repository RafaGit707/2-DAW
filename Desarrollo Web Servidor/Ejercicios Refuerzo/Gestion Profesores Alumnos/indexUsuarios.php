<?php
require_once 'usuario.php';
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title><?= $usuario->esProfesor() ? 'ALUMNOS' : 'MÓDULOS' ?></title>
</head>
<body>
    <div class="div-index">
        <h1><?= $usuario->esProfesor() ? 'ALUMNOS' : 'MÓDULOS' ?></h1>
        
        <?php if ($usuario->esProfesor()): ?>
            <ul>
                <?php 
                $alumnos = ['Ana López', 'Juan Pérez', 'María García', 'Carlos Sánchez'];
                foreach ($alumnos as $alumno): ?>
                    <li><?= htmlspecialchars($alumno) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <ul>
                <?php 
                $modulos = ['Matemáticas', 'Ciencias', 'Historia', 'Geografía'];
                foreach ($modulos as $modulo): ?>
                    <li><?= htmlspecialchars($modulo) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>
