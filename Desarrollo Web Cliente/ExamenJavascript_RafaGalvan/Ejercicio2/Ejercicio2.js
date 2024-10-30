let clasificaciones = ["Ana", "Oswaldo", "Raúl", "Celia", "María", "Antonio"];
document.write("Clasificación inicial: " + clasificaciones + "<br>");

[clasificaciones[2], clasificaciones[3]] = [clasificaciones[3], clasificaciones[2]];

clasificaciones.pop();

clasificaciones.splice(1, 0, "Roberto", "Amaya");

clasificaciones.unshift("Marta");

document.write("Clasificación actualizada: " + clasificaciones);