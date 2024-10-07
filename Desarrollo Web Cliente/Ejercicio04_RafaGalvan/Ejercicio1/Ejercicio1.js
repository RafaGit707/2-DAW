let num1 = parseFloat(prompt("Ingrese el primer número:"));
let num2 = parseFloat(prompt("Ingrese el segundo número:"));

if (num1 > num2) {
    let suma = num1 + num2;
    let diferencia = num1 - num2;
    document.write(`La suma es: ${suma} <br> La diferencia es: ${diferencia}`);
} else {
    let producto = num1 * num2;
    let division = num1 / num2;
    document.write(`El producto es: ${producto} <br> La división es: ${division}`);
}