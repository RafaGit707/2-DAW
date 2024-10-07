let num = parseInt(prompt("Ingrese un número entero:"));

if (num % 5 === 0) {
    document.write(`${num} es múltiplo de 5.`);
} else {
    document.write(`${num} no es múltiplo de 5.`);
}