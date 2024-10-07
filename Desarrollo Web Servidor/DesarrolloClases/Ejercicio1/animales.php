<?php

abstract class Animal {
    private $energia = 0;
    abstract function emitirSonido(): void;

    function correr() {
        if ($this->energia > 0) {
            $this->energia--;
            echo "El animal está corriendo. Energía restante: " . $this->energia . "<br>";
        } else {
            echo "El animal necesita comer.<br>";
        }
    }
    function comer() {
        $this->energia++;
        echo "El animal ha comido. Energía actual: " . $this->energia . "<br>";
    }

}
?>