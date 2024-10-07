let sumaLista1 = 0;
let sumaLista2 = 0;

for (let i = 1; i <= 3; i++) {
    let valor = parseInt(prompt("Ingrese un valor para la lista 1 (valor " + i + "):"));
    sumaLista1 += valor;
}

for (let i = 1; i <= 3; i++) {
    let valor = parseInt(prompt("Ingrese un valor para la lista 2 (valor " + i + "):"));
    sumaLista2 += valor;
}

if (sumaLista1 > sumaLista2) {
    document.write("Lista 1 mayor<br>");
} else if (sumaLista2 > sumaLista1) {
    document.write("Lista 2 mayor<br>");
} else {
    document.write("Listas iguales<br>");
}