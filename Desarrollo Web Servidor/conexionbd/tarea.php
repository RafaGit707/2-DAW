<?php
class Tarea {
    public $id;
    public $nombre;
    public $fechaFinalizacion;

    public function __construct($id, $nombre, $fechaFinalizacion) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->fechaFinalizacion = $fechaFinalizacion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFechaFinalizacion() {
        return $this->fechaFinalizacion;
    }
}
?>