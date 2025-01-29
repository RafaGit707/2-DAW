let equilateros = 0, isosceles = 0, escalenos = 0;

for (let i = 1; i <= 4; i++) {
    let lado1 = parseInt(prompt("Ingrese el primer lado del triángulo " + i + ":"));
    let lado2 = parseInt(prompt("Ingrese el segundo lado del triángulo " + i + ":"));
    let lado3 = parseInt(prompt("Ingrese el tercer lado del triángulo " + i + ":"));

    if (lado1 === lado2 && lado2 === lado3) {
        document.write("Triángulo " + i + " es equilátero<br>");
        equilateros++;
    } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
        document.write("Triángulo " + i + " es isósceles<br>");
        isosceles++;
    } else {
        document.write("Triángulo " + i + " es escaleno<br>");
        escalenos++;
    }
}

document.write("Cantidad de equiláteros: " + equilateros + "<br>");
document.write("Cantidad de isósceles: " + isosceles + "<br>");
document.write("Cantidad de escalenos: " + escalenos + "<br>");

if (equilateros <= isosceles && equilateros <= escalenos) {
    document.write("El tipo de triángulo con menor cantidad es: Equilátero<br>");
} else if (isosceles <= equilateros && isosceles <= escalenos) {
    document.write("El tipo de triángulo con menor cantidad es: Isósceles<br>");
} else {
    document.write("El tipo de triángulo con menor cantidad es: Escaleno<br>");
}