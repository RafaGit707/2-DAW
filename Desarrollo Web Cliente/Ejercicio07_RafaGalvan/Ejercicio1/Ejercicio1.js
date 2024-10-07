let mes = parseInt(prompt("Ingrese un número de mes (1-12):"));

if (mes < 1 || mes > 12) {
    document.write("El número ingresado no corresponde a un mes válido.");
} else {
    let nombreMes;
    let dias;

    if (mes === 1) {
        nombreMes = "Enero";
        dias = 31;
    } else if (mes === 2) {
        nombreMes = "Febrero";
        dias = 28;
    } else if (mes === 3) {
        nombreMes = "Marzo";
        dias = 31;
    } else if (mes === 4) {
        nombreMes = "Abril";
        dias = 30;
    } else if (mes === 5) {
        nombreMes = "Mayo";
        dias = 31;
    } else if (mes === 6) {
        nombreMes = "Junio";
        dias = 30;
    } else if (mes === 7) {
        nombreMes = "Julio";
        dias = 31;
    } else if (mes === 8) {
        nombreMes = "Agosto";
        dias = 31;
    } else if (mes === 9) {
        nombreMes = "Septiembre";
        dias = 30;
    } else if (mes === 10) {
        nombreMes = "Octubre";
        dias = 31;
    } else if (mes === 11) {
        nombreMes = "Noviembre";
        dias = 30;
    } else if (mes === 12) {
        nombreMes = "Diciembre";
        dias = 31;
    }

    document.write("El mes de " + nombreMes + " tiene " + dias + " días.");
}