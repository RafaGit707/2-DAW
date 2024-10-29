<?php
require_once 'transferencia.php';

// Lista de destinatarios
function obtenerDestinatarios() {
    return [
        "Juan Pérez",
        "Ana Gómez",
        "Carlos Ramírez"
    ];
}

// Lista de transacciones
function obtenerTransacciones() {
    return $_SESSION['transacciones'] ?? [];
}

?>
