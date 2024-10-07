let edadesManana = 0, edadesTarde = 0, edadesNoche = 0;

for (let i = 1; i <= 5; i++) {
    edadesManana += parseInt(prompt("Ingrese la edad del estudiante " + i + " del turno mañana:"));
}

for (let i = 1; i <= 6; i++) {
    edadesTarde += parseInt(prompt("Ingrese la edad del estudiante " + i + " del turno tarde:"));
}

for (let i = 1; i <= 11; i++) {
    edadesNoche += parseInt(prompt("Ingrese la edad del estudiante " + i + " del turno noche:"));
}

let promedioManana = edadesManana / 5;
let promedioTarde = edadesTarde / 6;
let promedioNoche = edadesNoche / 11;

document.write("Promedio de edades turno mañana: " + promedioManana + "<br>");
document.write("Promedio de edades turno tarde: " + promedioTarde + "<br>");
document.write("Promedio de edades turno noche: " + promedioNoche + "<br>");

if (promedioManana > promedioTarde && promedioManana > promedioNoche) {
    document.write("El turno con el promedio mayor es: Mañana<br>");
} else if (promedioTarde > promedioManana && promedioTarde > promedioNoche) {
    document.write("El turno con el promedio mayor es: Tarde<br>");
} else if (promedioNoche > promedioManana && promedioNoche > promedioTarde) {
    document.write("El turno con el promedio mayor es: Noche<br>");
}