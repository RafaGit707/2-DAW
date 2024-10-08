<?php

interface Vehiculo {
    public function getNombre(): string;
    public function arrancar(): void;
    public function detener(): void;
    public function rellenarDeposito(int $cantidad): void;
}

class Garaje {
    private $plazas = [];

    public function aparcar(Vehiculo $vehiculo): void {
        $this->plazas[] = $vehiculo;
        echo $vehiculo->getNombre() . " ha sido aparcado<br>";
    }

    public function listarVehiculos(): void {
        echo "Vehículos en el garaje:<br>";
        foreach ($this->plazas as $vehiculo) {
            echo "- " . $vehiculo->getNombre() . "<br>";
        }
    }
}

class Coche implements Vehiculo {
    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function arrancar(): void {
        echo $this->nombre . " está arrancando<br>";
    }

    public function detener(): void {
        echo $this->nombre . " está detenido<br>";
    }

    public function rellenarDeposito(int $cantidad): void {
        echo "Se ha rellenado el depósito de " . $this->nombre . " con " . $cantidad . " litros<br>";
    }
}

class Moto implements Vehiculo {
    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function arrancar(): void {
        echo $this->nombre . " está arrancando<br>";
    }

    public function detener(): void {
        echo $this->nombre . " está detenida<br>";
    }

    public function rellenarDeposito(int $cantidad): void {
        echo "Se ha rellenado el depósito de " . $this->nombre . " con " . $cantidad . " litros<br>";
    }
}

$coche = new Coche("Toyota");
$moto = new Moto("Harley-Davidson");

$garaje = new Garaje();

$garaje->aparcar($coche);
$garaje->aparcar($moto);

$garaje->listarVehiculos();

?>