let empleados100a300 = 0;
let empleadosMasDe300 = 0;
let totalSueldos = 0;

for (let i = 1; i <= 5; i++) {
    let sueldo = parseFloat(prompt("Ingrese el sueldo del empleado " + i + ":"));
    totalSueldos += sueldo;
    if (sueldo >= 100 && sueldo <= 300) {
        empleados100a300++;
    } else if (sueldo > 300) {
        empleadosMasDe300++;
    }
}

document.write("Empleados que cobran entre 100€ y 300€: " + empleados100a300 + "<br>");
document.write("Empleados que cobran más de 300€: " + empleadosMasDe300 + "<br>");
document.write("Total de sueldos pagados por la empresa: " + totalSueldos + "€<br>");