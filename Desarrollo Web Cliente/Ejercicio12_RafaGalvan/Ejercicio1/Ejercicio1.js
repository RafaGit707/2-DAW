let contadorSuperficieMayorA12 = 0;

for (let i = 1; i <= 3; i++) {
    let base = parseInt(prompt("Ingrese la base del triángulo " + i + ":"));
    let altura = parseInt(prompt("Ingrese la altura del triángulo " + i + ":"));

    let superficie = (base * altura) / 2;
    document.write("Triángulo " + i + ": Base = " + base + ", Altura = " + altura + ", Superficie = " + superficie + "<br>");

    if (superficie > 12) {
        contadorSuperficieMayorA12++;
    }
}

document.write("Cantidad de triángulos con superficie mayor a 12: " + contadorSuperficieMayorA12 + "<br>");