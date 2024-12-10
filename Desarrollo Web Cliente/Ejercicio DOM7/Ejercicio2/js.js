function agregarNodoTexto() {
    let parrafo = document.getElementById('miParrafo');
    let nuevoTexto = document.createTextNode("Nuevo texto añadido. ");
    parrafo.appendChild(nuevoTexto);
}

function eliminarNodoTexto() {
    let parrafo = document.getElementById('miParrafo');
    if (parrafo.hasChildNodes()) {
        parrafo.removeChild(parrafo.firstChild);
    }
}