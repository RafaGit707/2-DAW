let pares = 0;
let impares = 0;

for (let i = 1; i <= 5; i++) {
    let numero = parseInt(prompt("Ingrese el número " + i + ":"));
    if (numero % 2 == 0) {
        pares++;
    } else {
        impares++;
    }
}

document.write("Cantidad de números pares: " + pares + "<br>");
document.write("Cantidad de números impares: " + impares + "<br>");