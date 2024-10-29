let tamaño = parseInt(prompt("Ingrese el tamaño de los vectores:"));

let vector1 = [];
let vector2 = [];
let vectorSuma = [];

for (let i = 0; i < tamaño; i++) {
  let valor1 = parseInt(prompt(`Ingrese el valor ${i + 1} para el primer vector:`));
  vector1.push(valor1);
}

for (let i = 0; i < tamaño; i++) {
  let valor2 = parseInt(prompt(`Ingrese el valor ${i + 1} para el segundo vector:`));
  vector2.push(valor2);
}

for (let i = 0; i < tamaño; i++) {
  vectorSuma.push(vector1[i] + vector2[i]);
}

document.write("Vector 1: " + vector1 + "<br>");
document.write("Vector 2: " + vector2 + "<br>");
document.write("Suma de los vectores: " + vectorSuma);
