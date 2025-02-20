<?php
class Mensaje {
    public $id;
    public $texto;
    public $fechaEnvio;
    public $idContacto;

    public function __construct($id, $texto, $fechaEnvio, $idContacto) {
        $this->id = $id;
        $this->texto = $texto;
        $this->fechaEnvio = $fechaEnvio;
        $this->idContacto = $idContacto;
    }
}

?>
