<?php
require_once 'transferencia.php';
require_once 'funcioness.php';
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Listado de Transacciones</title>
</head>
<body>
    <header>
        <h1>Transacciones Realizadas</h1>
        <p>Saldo disponible: <?php echo $_SESSION['saldo']; ?> €</p>
    </header>

    <main>
        <section>
            <h2>Listado de Transacciones</h2>
            <?php if (empty($_SESSION['transacciones'])): ?>
                <p>No hay transacciones realizadas.</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($_SESSION['transacciones'] as $transaccion): ?>
                        <li>
                            <h2>Transaccion</h2>
                            <p>Destinatario: <?php echo $transaccion->getDestinatario(); ?></p>
                            <p>Concepto: <?php echo $transaccion->getConcepto(); ?> </p>
                            <p>Importe: <?php echo $transaccion->getImporte(); ?> €</p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>
        <a class="button-volver" href="index.php">Volver a Transferencias</a>
    </main>
</body>
</html>

