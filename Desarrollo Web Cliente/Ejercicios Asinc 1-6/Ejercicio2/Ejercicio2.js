let numeros = [];

for (let i = 1; i <= 10; i++) {
    let numero = parseInt(prompt("Ingrese el número " + i + ":"));
    numeros.push(numero);
}

let sumaUltimos5 = 0;
for (let i = 5; i < 10; i++) {
    sumaUltimos5 += numeros[i];
}

document.write("La suma de los últimos 5 números es: " + sumaUltimos5 + "<br>");