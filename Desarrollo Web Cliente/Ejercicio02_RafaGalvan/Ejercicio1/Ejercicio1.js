let nota1 = parseInt(prompt("Ingrese la primera nota:"));
let nota2 = parseInt(prompt("Ingrese la segunda nota:"));
let nota3 = parseInt(prompt("Ingrese la tercera nota:"));

let suma = nota1 + nota2 + nota3;
let promedio = suma / 3;

document.write("El promedio es: " + promedio + '<br>');

if (promedio >= 7) {
    document.write("Promocionado");
} else {
    document.write("No promocionado");
}
