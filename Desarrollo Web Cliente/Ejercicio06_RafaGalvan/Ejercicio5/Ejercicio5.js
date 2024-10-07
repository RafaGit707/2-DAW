let x = parseInt(prompt("Ingrese la coordenada x:"));
let y = parseInt(prompt("Ingrese la coordenada y:"));

if (x > 0 && y > 0) {
    document.write("El punto está en el primer cuadrante.");
} else if (x < 0 && y > 0) {
    document.write("El punto está en el segundo cuadrante.");
} else if (x < 0 && y < 0) {
    document.write("El punto está en el tercer cuadrante.");
} else if (x > 0 && y < 0) {
    document.write("El punto está en el cuarto cuadrante.");
} else {
    document.write("El punto está en uno de los ejes.");
}