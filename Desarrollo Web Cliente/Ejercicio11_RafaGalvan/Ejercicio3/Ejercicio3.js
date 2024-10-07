let totalPersonas = 0;
let totalVarones = 0;
let totalMujeres = 0;
let varonesEntre16y65 = 0;
let numeroDocumento;

do {
    numeroDocumento = parseInt(prompt("Ingrese el número de documento (0 para finalizar):"));

    if (numeroDocumento !== 0) {
        let edad = parseInt(prompt("Ingrese la edad:"));
        let sexo = prompt("Ingrese el sexo (femenino o masculino):").toLowerCase();

        totalPersonas++;

        if (sexo === "masculino") {
            totalVarones++;
            if (edad >= 16 && edad <= 65) {
                varonesEntre16y65++;
            }
        } else if (sexo === "femenino") {
            totalMujeres++;
        }
    }
} while (numeroDocumento !== 0);

document.write("Cantidad total de personas censadas: " + totalPersonas + "<br>");
document.write("Cantidad de varones: " + totalVarones + "<br>");
document.write("Cantidad de mujeres: " + totalMujeres + "<br>");
document.write("Cantidad de varones cuya edad varía entre 16 y 65 años: " + varonesEntre16y65 + "<br>");