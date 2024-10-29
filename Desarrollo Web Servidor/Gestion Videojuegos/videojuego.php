<?php
class Categoria {
    public $id;
    public $nombre;

    public function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }
}

class Desarrolladora {
    public $id;
    public $nombre;

    public function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }
}

class Videojuego {
    public $id;
    public $titulo;
    public $fecha_publicacion;
    public $categoria;
    public $desarrolladora;

    public function __construct($id, $titulo, $fecha_publicacion, $categoria, $desarrolladora) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->categoria = $categoria;
        $this->desarrolladora = $desarrolladora;
    }
}
?>
