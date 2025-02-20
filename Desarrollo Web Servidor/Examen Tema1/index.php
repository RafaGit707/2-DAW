<?php
require_once 'transferencia.php';
require_once 'funcioness.php';

session_start();

// Iniciar las variables de sesión
if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 1000; // Saldo inicial
}

if (!isset($_SESSION['transacciones'])) {
    $_SESSION['transacciones'] = [];
}

$destinatarios = obtenerDestinatarios();

// Procesar el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destinatario = $_POST['destinatario'];
    $concepto = $_POST['concepto'];
    $importe = $_POST['importe'];
    $mensaje = '';

    // Validar los campos
    if (!empty($destinatario) && !empty($concepto) && !empty($importe)) {
        if ($importe <= 500 && $importe <= $_SESSION['saldo']) {
            $nuevaTransferencia = new Transferencia($destinatario, $concepto, $importe);
            $_SESSION['transacciones'][] = $nuevaTransferencia;
            $_SESSION['saldo'] -= $importe; // Restar importe del saldo
            $mensaje = "Transferencia realizada con éxito.";
        } elseif ($importe >= 500) {
            $mensaje = "Importe demasiado alto.";
        } else {
            $mensaje = "Sin saldo suficiente.";
        }
    } else {
        $mensaje = "Todos los campos son obligatorios.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Bancaria</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Aplicación de Gestión Bancaria</h1>
        <p>Saldo disponible: <?php echo $_SESSION['saldo']; ?> €</p>
    </header>

    <main>
        <section>
            <h2>Realizar Transferencia</h2>
            <?php if (!empty($mensaje)) echo "<p class='mensaje'>$mensaje</p>"; ?>
            <form class="form-transaferencia" action="" method="POST">
                <label for="destinatario">Destinatario:</label>
                <select name="destinatario" id="destinatario" required>
                    <?php foreach ($destinatarios as $d): ?>
                        <option value="<?= $d ?>"><?= $d ?></option>
                    <?php endforeach; ?>
                </select>
                <br>

                <label for="concepto">Concepto:</label>
                <input type="text" name="concepto" required>
                <br>

                <label for="importe">Importe:</label>
                <input type="number" name="importe" required>
                <br>

                <button class="button-enviar" type="submit">Enviar</button>
            </form>
        </section>
        <a class="button-volver" href="transacciones.php">Ver Transacciones</a>
    </main>
</body>
</html>
