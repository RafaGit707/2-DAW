let vectorAleatorio = [];
for (let i = 0; i < 5; i++) {
    vectorAleatorio.push(Math.floor(Math.random() * 1000) + 1);
}

document.write("Vector original: " + vectorAleatorio + "<br>");

let ultimoElemento = vectorAleatorio.pop();
let penultimoElemento = vectorAleatorio.pop();
let sumaUltimos = ultimoElemento + penultimoElemento;

document.write("Vector inicial (sin los dos últimos):", vectorAleatorio + "<br>");
document.write("Suma de los dos últimos elementos:", sumaUltimos + "<br>");

vectorAleatorio.push(999);

document.write("Vector después de usar push:", vectorAleatorio + "<br>");
document.write("Tamaño final del vector:", vectorAleatorio.length);
