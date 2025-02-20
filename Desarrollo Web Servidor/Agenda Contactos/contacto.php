<?php
class Contacto {
    public $id;
    public $nombre;
    public $apellidos;
    public $telefono;
    public $foto;
    public $idUsuario;

    public function __construct($id, $nombre, $apellidos, $telefono, $foto, $idUsuario) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->foto = $foto;
        $this->idUsuario = $idUsuario;
    }
}

?>