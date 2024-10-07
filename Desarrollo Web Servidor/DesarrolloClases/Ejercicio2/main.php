<?php
require_once 'Empleado.php';

$manager = new Manager();
$developer = new Developer();

echo "Manager:<br>";
$manager->trabajar();

echo "<br>Developer:<br>";
$developer->trabajar();
?>
