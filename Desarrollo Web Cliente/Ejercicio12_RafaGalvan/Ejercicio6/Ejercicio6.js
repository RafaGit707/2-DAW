let cantidadPuntos = parseInt(prompt("Ingrese la cantidad de puntos a procesar:"));
let cuadrante1 = 0, cuadrante2 = 0, cuadrante3 = 0, cuadrante4 = 0;

for (let i = 1; i <= cantidadPuntos; i++) {
    let x = parseInt(prompt("Ingrese la coordenada X del punto " + i + ":"));
    let y = parseInt(prompt("Ingrese la coordenada Y del punto " + i + ":"));

    if (x > 0 && y > 0) {
        cuadrante1++;
    } else if (x < 0 && y > 0) {
        cuadrante2++;
    } else if (x < 0 && y < 0) {
        cuadrante3++;
    } else if (x > 0 && y < 0) {
        cuadrante4++;
    }
}

document.write("Puntos en el primer cuadrante: " + cuadrante1 + "<br>");
document.write("Puntos en el segundo cuadrante: " + cuadrante2 + "<br>");
document.write("Puntos en el tercer cuadrante: " + cuadrante3 + "<br>");
document.write("Puntos en el cuarto cuadrante: " + cuadrante4 + "<br>");