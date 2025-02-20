function agregarTexto() {
    let lista = document.getElementById('miLista');
    let items = lista.getElementsByTagName('li');
    
    for (let i = 0; i < items.length; i++) {
        items[i].textContent = "Texto para el ítem " + (i + 1);
    }
}