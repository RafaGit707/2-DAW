let palabra = prompt("Ingrese una palabra (casa, mesa, perro, gato):").toLowerCase();

switch (palabra) {
    case "casa":
        document.write("La traducción de 'casa' es 'house'.");
        break;
    case "mesa":
        document.write("La traducción de 'mesa' es 'table'.");
        break;
    case "perro":
        document.write("La traducción de 'perro' es 'dog'.");
        break;
    case "gato":
        document.write("La traducción de 'gato' es 'cat'.");
        break;
    default:
        document.write("Por favor ingrese 'casa', 'mesa', 'perro' o 'gato'.");
}