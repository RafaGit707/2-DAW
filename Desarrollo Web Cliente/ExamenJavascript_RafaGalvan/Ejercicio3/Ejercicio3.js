let numeros = [4,0,3,4,7,3,5,8,1,8,8,0,2,3,1,2,5,7,3,2,5,1];
document.write("Array inicial: " + numeros + "<br>");

let pares = numeros.filter(num => num % 2 === 0);
let impares = numeros.filter(num => num % 2 !== 0);

let arrayOrdenado = [pares, impares];
document.write("Array ordenado con pares primero: ", arrayOrdenado);