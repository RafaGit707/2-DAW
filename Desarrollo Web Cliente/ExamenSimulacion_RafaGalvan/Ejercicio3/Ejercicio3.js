var valores = [true, 5, false, "hola", "adios", 2];

document.write("El texto mayor es: " , valores[3] > valores[4] ? valores[3] : valores[4]);

document.write("<br>" + "Resultado true: ", valores[0] || valores[2]);
document.write("<br>" + "Resultado false: ", valores[0] && valores[2] + "<br>");

let suma = valores[1] + valores[5];
let resta = valores[1] - valores[5];
let multiplicacion = valores[1] * valores[5];
let division = valores[1] / valores[5];
let porcentaje = valores[1] % valores[5];

document.write("Suma: ", suma + "<br>");
document.write("Resta: ", resta + "<br>");
document.write("Multiplicación: ", multiplicacion + "<br>");
document.write("División: ", division + "<br>");
document.write("Porcentaje: ", porcentaje);