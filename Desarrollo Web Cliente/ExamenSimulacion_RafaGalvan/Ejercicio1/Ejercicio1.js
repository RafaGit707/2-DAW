let factorial = 1;
let numero = parseInt(prompt("Introduce un número entero:"));

for (let i = 1; i <= numero; i++) {
    factorial *= i;
}
document.write("El factorial de " + numero + " es: " + factorial);