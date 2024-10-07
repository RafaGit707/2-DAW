let acumulado = 0;
let valor;

do {
    valor = parseInt(prompt("Ingrese un valor (9999 para finalizar):"));
    if (valor !== 9999) {
        acumulado += valor;
    }
} while (valor !== 9999);

document.write("Valor acumulado: " + acumulado + "<br>");

if (acumulado > 0) {
    document.write("El valor acumulado es mayor que cero.<br>");
} else if (acumulado < 0) {
    document.write("El valor acumulado es menor que cero.<br>");
} else {
    document.write("El valor acumulado es cero.<br>");
}
