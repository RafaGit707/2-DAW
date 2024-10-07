let sumaAlturas = 0;

for (let i = 1; i <= 5; i++) {
    let altura = parseFloat(prompt("Ingrese la altura de la persona " + i + ":"));
    sumaAlturas += altura;
}

let promedioAlturas = sumaAlturas / 5;
document.write("La altura promedio es: " + promedioAlturas.toFixed(2) + " metros<br>");