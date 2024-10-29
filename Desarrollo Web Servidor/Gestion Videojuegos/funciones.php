<?php
require_once 'videojuego.php';

session_start();

function getDesarrolladoras() {
    return [
        new Desarrolladora(1, "Nintendo"),
        new Desarrolladora(2, "Sony"),
        new Desarrolladora(3, "Microsoft"),
        new Desarrolladora(4, "Ubisoft"),
    ];
}

function getCategorias() {
    return [
        new Categoria(1, "Acción"),
        new Categoria(2, "Aventura"),
        new Categoria(3, "Deportes"),
        new Categoria(4, "Puzzle"),
    ];
}

function getVideojuegos() {
    $desarrolladoras = getDesarrolladoras();
    $categorias = getCategorias();
    
    $videojuegos = [
        new Videojuego(1, "The Legend of Zelda", "2023-05-12", $categorias[0], $desarrolladoras[0]),
        new Videojuego(2, "FIFA 23", "2022-09-30", $categorias[2], $desarrolladoras[2]),
        new Videojuego(3, "Uncharted 4", "2016-05-10", $categorias[1], $desarrolladoras[1]),
        new Videojuego(4, "Assassin's Creed", "2020-11-10", $categorias[1], $desarrolladoras[3]),
    ];

    if (isset($_SESSION['videojuegos']) && is_array($_SESSION['videojuegos'])) {
        $videojuegos = array_merge($videojuegos, $_SESSION['videojuegos']);
    }

    return $videojuegos;
}

function obtenerUltimoId() {
    $videojuegos = getVideojuegos();
    
    if (!empty($videojuegos)) {
        return max(array_map(function($v) {
            return $v->id;
        }, $videojuegos));
    }

    return 0;
}

function agregarVideojuego($videojuego) {
    if (!isset($_SESSION['videojuegos'])) {
        $_SESSION['videojuegos'] = [];
    }

    $ultimoId = obtenerUltimoId();

    $videojuego->id = $ultimoId + 1;

    $_SESSION['videojuegos'][] = $videojuego;
}

function filtrarVideojuegos($videojuegos, $titulo, $categoria_id, $desarrolladora_id) {
    $videojuegos_filtrados = [];

    foreach ($videojuegos as $videojuego) {
        $coincide = true;

        if (!empty($titulo) && stripos($videojuego->titulo, $titulo) === false) {
            $coincide = false;
        }

        if (!empty($categoria_id) && $videojuego->categoria->id != $categoria_id) {
            $coincide = false;
        }

        if (!empty($desarrolladora_id) && $videojuego->desarrolladora->id != $desarrolladora_id) {
            $coincide = false;
        }

        if ($coincide) {
            $videojuegos_filtrados[] = $videojuego;
        }
    }

    return $videojuegos_filtrados;
}
?>
