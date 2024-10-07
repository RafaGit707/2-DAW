let dia = parseInt(prompt("Ingrese el día:"));
let mes = parseInt(prompt("Ingrese el mes:"));
let año = parseInt(prompt("Ingrese el año:"));

if (dia === 25 && mes === 12) {
    document.write("La fecha corresponde a Navidad.");
} else {
    document.write("La fecha no es Navidad.");
}