let numero = parseInt(prompt("Ingrese un número entre 1 y 99:"));

if (numero >= 1 && numero <= 9) {
    document.write(`El número ${numero} tiene un dígito.`);
} else if (numero >= 10 && numero <= 99) {
    document.write(`El número ${numero} tiene dos dígitos.`);
} else {
    document.write("El número ingresado no es válido.");
}