let num1 = parseInt(prompt("Ingrese el primer número:"));
let num2 = parseInt(prompt("Ingrese el segundo número:"));
let num3 = parseInt(prompt("Ingrese el tercer número:"));

let mayor = num1;

if (num2 > mayor) {
    mayor = num2;
}
if (num3 > mayor) {
    mayor = num3;
}
document.write("El numero mayor es " + mayor);