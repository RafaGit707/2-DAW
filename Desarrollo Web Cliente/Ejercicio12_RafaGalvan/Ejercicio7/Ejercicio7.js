let negativos = 0, positivos = 0, multiplosDe15 = 0, sumaPares = 0;

for (let i = 1; i <= 10; i++) {
    let valor = parseInt(prompt("Ingrese el valor " + i + ":"));

    if (valor < 0) {
        negativos++;
    } else if (valor > 0) {
        positivos++;
    }

    if (valor % 15 === 0) {
        multiplosDe15++;
    }

    if (valor % 2 === 0) {
        sumaPares += valor;
    }
}

document.write("Cantidad de valores negativos: " + negativos + "<br>");
document.write("Cantidad de valores positivos: " + positivos + "<br>");
document.write("Cantidad de múltiplos de 15: " + multiplosDe15 + "<br>");
document.write("Suma de los valores pares: " + sumaPares + "<br>");