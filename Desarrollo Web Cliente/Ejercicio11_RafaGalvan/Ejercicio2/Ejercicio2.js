let totalAcreedores = 0;
let numeroCuenta;

do {
    numeroCuenta = parseInt(prompt("Ingrese el número de cuenta (número negativo para finalizar):"));

    if (numeroCuenta >= 0) {
        let nombreCliente = prompt("Ingrese el nombre del cliente:");
        let saldo = parseInt(prompt("Ingrese el saldo actual:"));

        document.write("Número de cuenta: " + numeroCuenta + "<br>");
        document.write("Nombre del cliente: " + nombreCliente + "<br>");
        document.write("Saldo: " + saldo + "<br>");

        if (saldo > 0) {
            document.write("Estado de la cuenta: Acreedor<br>");
            totalAcreedores += saldo;
        } else if (saldo < 0) {
            document.write("Estado de la cuenta: Deudor<br>");
        } else {
            document.write("Estado de la cuenta: Nulo<br>");
        }
        document.write("<br>");
    }
} while (numeroCuenta >= 0);

document.write("Suma total de los saldos acreedores: " + totalAcreedores + "<br>");