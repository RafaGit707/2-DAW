<?php
class Personaje {
    private $nombre;
    private $clase;
    private $raza;
    private $habilidades = [];
    private $especializacion;

    public function __construct($nombre, $clase, $raza) {
        $this->nombre = $nombre;
        $this->clase = $clase;
        $this->raza = $raza;
        $this->setHabilidadesYEspecializaciones();
    }

    private function setHabilidadesYEspecializaciones() {
        switch ($this->clase) {
            case 'mago':
                $this->habilidades = ["Bola de fuego", "Rayo de escarcha", "Paralizar"];
                $this->especializaciones = ["Mago blanco", "Mago oscuro", "Mago de luz"];
                break;
            case 'guerrero':
                $this->habilidades = ["Bloqueo", "Ataque poderoso", "Ataque con dos armas"];
                $this->especializaciones = ["Tanque", "Berserker", "Paladin"];
                break;
            case 'ladron':
                $this->habilidades = ["Robar", "Sigilo", "Abrir cerraduras"];
                $this->especializaciones = ["Pícaro", "Esgrima", "Maestro de las sombras"];
                break;
        }
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getClase() {
        return $this->clase;
    }

    public function getRaza() {
        return $this->raza;
    }

    public function getHabilidades() {
        return $this->habilidades;
    }

    public function getEspecializaciones() {
        return $this->especializaciones;
    }

    public function setHabilidades($habilidades) {
        $this->habilidades = $habilidades;
    }

    public function setEspecializacion($especializacion) {
        $this->especializacion = $especializacion;
    }

    public function getEspecializacion() {
        return $this->especializacion;
    }
}
?>
