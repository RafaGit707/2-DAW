let numero = parseInt(prompt("Ingrese un número entero positivo de hasta 3 cifras:"));

if (numero >= 1 && numero <= 9) {
    document.write("El número tiene 1 cifra.");
} else if (numero >= 10 && numero <= 99) {
    document.write("El número tiene 2 cifras.");
} else if (numero >= 100 && numero <= 999) {
    document.write("El número tiene 3 cifras.");
} else {
    document.write("Número inválido.");
}