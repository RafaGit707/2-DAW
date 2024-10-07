function compararClaves() {
    let clave1 = prompt("Ingrese la primera clave:");
    let clave2 = prompt("Ingrese la segunda clave:");

    if (clave1 == clave2) {
        document.write("Las claves son iguales");
    } else {
        document.write("Las claves no coinciden");
    }
}

window.onload = compararClaves;