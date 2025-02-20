<?php

class Modelo {
    public $id;
    public $nombre;

    public function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }
}

class Coche {
    public $id;
    public $modelo;
    public $color;
    public $precio;
    public $imagen;

    public function __construct($id, $modelo, $color, $precio, $imagen) {
        $this->id = $id;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->precio = $precio;
        $this->imagen = $imagen;
    }
}

?>
