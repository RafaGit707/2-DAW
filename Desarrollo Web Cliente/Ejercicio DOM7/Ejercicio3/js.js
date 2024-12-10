function insertarPárrafo() {
    let div = document.getElementById('miDiv');
    let nuevoPárrafo = document.createElement('p');
    nuevoPárrafo.textContent = "Nuevo Párrafo al principio";
    div.insertBefore(nuevoPárrafo, div.firstChild);
}