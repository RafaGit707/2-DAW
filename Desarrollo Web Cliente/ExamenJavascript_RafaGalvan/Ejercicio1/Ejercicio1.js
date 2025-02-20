function esPalindromo(cadena) {
    let cadenaLimpia = cadena.replace(/\s+/g, '').toLowerCase();
    
    let longitud = cadenaLimpia.length;
    for (let i = 0; i < longitud / 2; i++) {
        if (cadenaLimpia[i] !== cadenaLimpia[longitud - 1 - i]) {
            return false;
        }
    }
    return true;
}

let texto = prompt("Introduce una cadena de texto:");
document.write(esPalindromo(texto) ? "Es un palíndromo" : "No es un palíndromo");