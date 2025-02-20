<?php
class Usuario {
    public $email;
    public $rol;

    public function __construct($email, $rol) {
        $this->email = $email;
        $this->rol = $rol;
    }

    public function esProfesor() {
        return $this->rol === 'profesor';
    }

    public function esAlumno() {
        return $this->rol === 'alumno';
    }
}
?>
