let vector = [];
let acumuladoTotal = 0;
let acumuladoMayores36 = 0;
let cantidadMayores50 = 0;

for (let i = 0; i < 8; i++) {
  let valor = parseInt(prompt(`Ingrese el valor ${i + 1}:`));
  vector.push(valor);
  acumuladoTotal += valor;

  if (valor > 36) {
    acumuladoMayores36 += valor;
  }

  if (valor > 50) {
    cantidadMayores50++;
  }
}
document.write("Valor acumulado de todos los elementos: " + acumuladoTotal + "<br>");
document.write("Valor acumulado de los elementos mayores a 36: " + acumuladoMayores36 + "<br>");
document.write("Cantidad de valores mayores a 50: " + cantidadMayores50);
