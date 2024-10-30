function calcularPresupuesto() {
    let mensajeError = document.getElementById("imp");
    let campoImporteTotal = document.getElementById("valor");
    let numPersonas = parseInt(document.getElementById("select1").value);

    mensajeError.textContent = "";
    campoImporteTotal.value = "";

    let origenSeleccionado = document.querySelector('input[name="origen"]:checked');
    let destinoSeleccionado = document.querySelector('input[name="destino"]:checked');

    if (!origenSeleccionado || !destinoSeleccionado) {
        mensajeError.textContent = "Es obligatorio seleccionar el origen y destino del vuelo";
        return;
    }

    let origenId = parseInt(origenSeleccionado.id.replace("bot", ""));
    let destinoId = parseInt(destinoSeleccionado.id.replace("bot", ""));
    
    if (destinoId !== origenId + 1) {
        mensajeError.textContent = "Seleccione un origen y destino en la misma línea.";
        return;
    }

    let precioDestino = parseInt(destinoSeleccionado.value);
    let importeTotal = precioDestino * numPersonas;

    campoImporteTotal.value = `${importeTotal} €`;
}

