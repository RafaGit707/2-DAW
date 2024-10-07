let nombre = prompt("Ingrese el nombre del aspirante:");
let totalPreguntas = parseInt(prompt("Ingrese la cantidad total de preguntas:"));
let correctas = parseInt(prompt("Ingrese la cantidad de preguntas correctas:"));

let porcentaje = (correctas / totalPreguntas) * 100;
let nivel;

if (porcentaje >= 90) {
    nivel = "Nivel superior";
} else if (porcentaje >= 75) {
    nivel = "Nivel medio";
} else if (porcentaje >= 50) {
    nivel = "Nivel regular";
} else {
    nivel = "Fuera de nivel";
}

document.write("Nombre del aspirante: " + nombre + "<br>");
document.write("Porcentaje de respuestas correctas: " + porcentaje.toFixed(2) + "%<br>");
document.write("Nivel: " + nivel);