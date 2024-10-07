<?php
abstract class Empleado {
    abstract function trabajar();
}

class Manager extends Empleado {
    function trabajar() {
        echo "No me molestes, estoy ocupado.<br>";
    }
}

class Developer extends Empleado {
    function trabajar() {
        echo "Just coding!<br>";
    }
}
?>
