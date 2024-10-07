let notasMayoresOIguales7 = 0;
let notasMenores7 = 0;

for (let i = 1; i <= 10; i++) {
    let nota = parseFloat(prompt("Ingrese la nota del alumno " + i + ":"));
    if (nota >= 7) {
        notasMayoresOIguales7++;
    } else {
        notasMenores7++;
    }
}

document.write("Notas mayores o iguales a 7: " + notasMayoresOIguales7 + "<br>");
document.write("Notas menores a 7: " + notasMenores7 + "<br>");