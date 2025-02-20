function eliminarPárrafo() {
    let div = document.getElementById('miDiv');
    let posicion = parseInt(document.getElementById('posicion').value);
    
    if (posicion >= 0 && posicion <= 2 && div.children[posicion]) {
        div.removeChild(div.children[posicion]);
    } else {
        alert("Posición no válida.");
    }
}