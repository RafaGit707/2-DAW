<?php
require_once 'coche.php';

function getModelos() {
    return [
        new Modelo(1, "Volkswagen"),
        new Modelo(2, "Seat"),
        new Modelo(3, "Lexus"),
        new Modelo(4, "Audi"),
    ];
}

function getCoches() {
    $modelos = getModelos();

    $coches = [
        new Coche(1, $modelos[0], "Gris Plateado", 52, "img/golf.png"),
        new Coche(2, $modelos[1], "Blanco", 43, "img/ibiza.png"),
        new Coche(3, $modelos[2], "Blanco", 107, "img/lexus.png"),
        new Coche(4, $modelos[3], "Gris Nardo", 61, "img/audi.png"),
    ];

    return $coches;
}

function filtrarCoches($coches, $modelo_id, $precio_max) {
    return array_filter($coches, function($coche) use ($modelo_id, $precio_max) {
        return (!$modelo_id || $coche->modelo->id == $modelo_id) &&
               (!$precio_max || $coche->precio <= $precio_max);
    });
}

function obtenerCochePorId($id) {
    $coches = getCoches();
    foreach ($coches as $coche) {
        if ($coche->id == $id) {
            return $coche;
        }
    }
    return null;
}

?>
