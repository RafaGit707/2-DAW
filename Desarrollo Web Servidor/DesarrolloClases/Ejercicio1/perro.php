<?php
require_once 'animales.php';

class Perro extends Animal {
    function emitirSonido(): void {
        echo "El perro ladra: ¡Guau guau!<br>";
    }
}
$perro = new Perro();

echo "Perro:<br>";
$perro->emitirSonido();
$perro->correr();
$perro->comer();
$perro->correr();
?>