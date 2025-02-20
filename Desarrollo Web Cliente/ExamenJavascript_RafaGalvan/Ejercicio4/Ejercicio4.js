function generarNombre() {
    let cadena1 = prompt("Introduce la primera cadena:");
    let cadena2 = prompt("Introduce la segunda cadena:");
    let cadena3 = prompt("Introduce la tercera cadena:");

    if (cadena1.length > 5 && cadena2.length > 5 && cadena3.length > 5) {
        let nuevaPalabra = cadena1.slice(-3) + cadena2.slice(-3) + cadena3.slice(-3);
        document.write("La nueva palabra es: " + nuevaPalabra);
    }

    if (cadena1.length < 5 || cadena2.length < 5 || cadena3.length < 5) {
        document.write("Error: al menos una de las cadenas es demasiado corta.");
    }
}
