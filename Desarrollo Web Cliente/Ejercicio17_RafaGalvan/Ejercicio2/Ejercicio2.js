let sueldos = [];
let sueldo;

while (true) {
    sueldo = parseInt(prompt("Ingrese el sueldo del empleado (0 para finalizar):"));
    if (sueldo === 0) break;
    sueldos.push(sueldo);
}

sueldos.sort((a, b) => b - a);

document.write("Sueldos ordenados de mayor a menor:", sueldos);
