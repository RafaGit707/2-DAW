<?php
require_once 'animales.php';

class Gato extends Animal {
    function emitirSonido(): void {
        echo "El gato maúlla: ¡Miau miau!<br>";
    }
}

$gato = new Gato();

echo "<br>Gato:<br>";
$gato->emitirSonido();
$gato->comer();
$gato->correr();
?>