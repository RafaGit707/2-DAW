let cadena1 = prompt("Introduce la primera cadena:");
let cadena2 = prompt("Introduce la segunda cadena:");
let letra = prompt("Introduce la letra a buscar:");
letra = letra.toLowerCase();

let contador1 = 0, contador2 = 0;

for (let i = 0; i < cadena1.length; i++) {
    if (cadena1[i].toLowerCase() === letra) {
        contador1++;
    }
}

for (let i = 0; i < cadena2.length; i++) {
    if (cadena2[i].toLowerCase() === letra) {
        contador2++;
    }
}

if (contador1 > contador2) {
    document.write("La cadena con más presencia de la letra " + letra + " es: " + cadena1);
} else {
    document.write("La cadena con más presencia de la letra '" + letra + "' es: " + cadena2);
}