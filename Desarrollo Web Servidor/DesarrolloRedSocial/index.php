<?php
    session_start();

    class Articulo {
        public $titulo;
        public $contenido;
        public $tags;
        public $likes;

        public function __construct($titulo, $contenido, $tags, $likes = 0) {
            $this->titulo = $titulo;
            $this->contenido = $contenido;
            $this->tags = $tags;
            $this->likes = $likes;
        }

        public function mostrarArticulo($id) {
            echo "<article>";
            echo "<h2>{$this->titulo}</h2>";
            echo "<p>{$this->contenido}</p>";
            echo "<div class='tags'><strong>Tags:</strong>";
            foreach ($this->tags as $tag) {
                echo "<span>#{$tag}</span>";
            }
            echo "</div>";
            echo "<div class='likes'>Likes: <span id='likes{$id}'>{$this->likes}</span> <button class='like-btn' onclick='likePost({$id})'>Me gusta</button></div>";
            echo "</article>";
        }
    }
?>  
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .container {
            display: flex;
            margin-top: 60px;
            width: 100%;
        }
        nav {
            width: 250px;
            background-color: #f4f4f4;
            padding: 20px;
            height: 100vh;
            position: fixed;
            top: 60px;
            left: 0;
            box-shadow: 2px 0px 5px rgba(0,0,0,0.1);
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            margin-bottom: 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 10px;
            display: block;
            border-radius: 5px;
        }
        nav ul li a:hover {
            background-color: #ddd;
        }
        main {
            flex-grow: 1;
            margin-left: 250px;
            padding: 20px;
            background-color: #fafafa;
        }
        article {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        article h2 {
            margin-top: 0;
        }
        .tags {
            margin-top: 10px;
            font-size: 0.9em;
            color: #777;
        }
        .tags span {
            background-color: #e0e0e0;
            padding: 5px;
            border-radius: 3px;
            margin-right: 5px;
        }
        .likes {
            margin-top: 10px;
            font-weight: bold;
        }
        .like-btn {
            color: #007BFF;
            cursor: pointer;
            font-size: 0.9em;
            border: none;
            background: none;
            padding: 0;
        }
        .like-btn:hover {
            text-decoration: underline;
        }
        .floating-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007BFF;
            color: white;
            padding: 15px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            border: none;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: white;
            padding: 20px;
            width: 500px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .close-btn {
            float: right;
            cursor: pointer;
            font-size: 20px;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        form input, form textarea {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            width: 100%;
        }
        form button {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!-- Cabecera -->
    <header>
        <h1>Mi Blog</h1>
    </header>

    <div class="container">
        <!-- Menú lateral -->
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Sobre mí</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>

        <!-- Parte central con artículos -->
        <main>
            <?php

            if (!isset($_SESSION['articulos'])) {
                $_SESSION['articulos'] = [
                    new Articulo("Título del primer post", "Este es el contenido del primer post de mi blog. Aquí puedes escribir sobre cualquier tema que te interese.", ["Tecnología", "Programación", "HTML"], 10),
                    new Articulo("Título del segundo post", "Este es el contenido del segundo post. Puedes escribir sobre temas diferentes y ofrecer tu opinión o experiencias.", ["Viajes", "Aventura", "Fotografía"], 5),
                    new Articulo("Título del tercer post", "Contenido del tercer post de mi blog. Aquí puedes compartir tus ideas, experiencias o cualquier cosa que quieras.", ["Salud", "Bienestar", "EstiloDeVida"], 3)
                ];
            }

            foreach ($_SESSION['articulos'] as $index => $articulo) {
                $articulo->mostrarArticulo($index);
            }

            if (isset($_POST['crear'])) {
                $titulo = $_POST['title'];
                $contenido = $_POST['content'];
                $tags = explode(',', $_POST['tags']);
                $nuevoArticulo = new Articulo($titulo, $contenido, $tags);
                $_SESSION['articulos'][] = $nuevoArticulo;
                header("Location: index.php");
                exit();
            }
            ?>
        </main>
    </div>

    <!-- Botón flotante para crear un post -->
    <button class="floating-btn" onclick="openModal()">+</button>

    <!-- Modal con el formulario para crear un post -->
    <div class="modal" id="postModal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2>Crear nuevo post</h2>
            <form method="POST">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" required>

                <label for="content">Contenido:</label>
                <textarea id="content" name="content" rows="4" required></textarea>

                <label for="tags">Tags (separados por comas):</label>
                <input type="text" id="tags" name="tags">

                <button type="submit" name="crear">Publicar</button>
            </form>
        </div>
    </div>

    <script>
        // Función para abrir el modal
        function openModal() {
            const modal = document.getElementById('postModal');
            modal.style.display = 'flex';  // Cambiar el display a 'flex' para que se vea
        }

        // Función para cerrar el modal
        function closeModal() {
            const modal = document.getElementById('postModal');
            modal.style.display = 'none';  // Ocultar el modal
        }

        // Función para aumentar el número de likes
        function likePost(postId) {
            const likesElement = document.getElementById('likes' + postId);
            let currentLikes = parseInt(likesElement.textContent);
            likesElement.textContent = currentLikes + 1;
        }
    </script>

</body>
</html>
