<?php
class Usuario {
    public $id;
    public $telefono;
    public $password;
    public $avatar;

    public function __construct($id, $telefono, $password, $avatar) {
        $this->id = $id;
        $this->telefono = $telefono;
        $this->password = $password;
        $this->avatar = $avatar;
    }
}
?>
