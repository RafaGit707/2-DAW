function mostrarDeportesSeleccionados() {
    let deportes = [];
    let checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    checkboxes.forEach(checkbox => {
        deportes.push(checkbox.value);
    });

    if (deportes.length > 0) {
        alert("Deportes seleccionados: " + deportes.join(', '));
    } else {
        alert("No has seleccionado ningún deporte.");
    }
}