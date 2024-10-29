let vector = Array.from({ length: 10 }, () => Math.floor(Math.random() * 1001));

let valorMinimo = Math.min(...vector);
let posicionMinima = vector.indexOf(valorMinimo);

let nuevoVector = vector.slice(posicionMinima);

document.write("Vector original:", vector + "<br>");
document.write("Valor mínimo:", valorMinimo + "<br>");
document.write("Nuevo vector desde el valor mínimo:", nuevoVector);