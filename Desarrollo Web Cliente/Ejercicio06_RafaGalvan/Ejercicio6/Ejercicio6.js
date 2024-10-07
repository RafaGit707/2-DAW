let sueldo = parseFloat(prompt("Ingrese el sueldo del operario:"));
let antiguedad = parseInt(prompt("Ingrese los años de antigüedad del operario:"));

if (sueldo < 500 && antiguedad >= 10) {
    let nuevoSueldo = sueldo * 1.20;
    document.write("Se otorga un aumento del 20%. Sueldo a pagar: " + nuevoSueldo);
} else if (sueldo < 500 && antiguedad < 10) {
    let nuevoSueldo = sueldo * 1.05;
    document.write("Se otorga un aumento del 5%. Sueldo a pagar: " + nuevoSueldo);
} else {
    document.write("Sueldo sin cambios: " + sueldo);
}