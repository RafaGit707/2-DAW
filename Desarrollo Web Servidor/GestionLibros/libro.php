<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Gestión de Libros</title>
</head>
<body>
    <?php
    class Libro {
        public $titulo;
        public $autor;
        public $anio;

        public function __construct($titulo, $autor, $anio) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->anio = $anio;
        }
    }

    session_start();

    if (!isset($_SESSION['libros'])) {
        $_SESSION['libros'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $anio = $_POST['anio'];

        $libro = new Libro($titulo, $autor, $anio);
        $_SESSION['libros'][] = $libro;
    }
    ?>
    
    <h1>Agregar un libro</h1>
    <form action="" method="POST">
        <label for="titulo">Título del libro:</label>
        <input type="text" id="titulo" name="titulo"><br><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor"><br><br>

        <label for="anio">Año de publicación:</label>
        <input type="number" id="anio" name="anio"><br><br>

        <input type="submit" value="Agregar libro"></input>
    </form>

    <h2>Libros almacenados</h2>
    <ul>
        <?php if (!empty($_SESSION['libros'])): ?>
            <?php foreach ($_SESSION['libros'] as $index => $libro): ?>
                <li>
                    <a href="detalle.php?titulo=<?= $libro->titulo ?>&autor=<?= $libro->autor ?>&anio=<?= $libro->anio ?>">
                        <?= $libro->titulo ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay libros almacenados.</p>
        <?php endif; ?>
    </ul>
</body>
</html>