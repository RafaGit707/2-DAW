let num1 = parseInt(prompt("Ingrese el primer número:"));
let num2 = parseInt(prompt("Ingrese el segundo número:"));
let num3 = parseInt(prompt("Ingrese el tercer número:"));

if (num1 === num2 && num2 === num3) {
    let resultado = (num1 + num2) * num3;
    document.write("El resultado es: " + resultado);
}