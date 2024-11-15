function mostrarPreferencias() {
    let tipoComida = document.querySelector('input[name="comida"]:checked');
    let resultado = document.getElementById("resultado");

    if (!tipoComida) {
        resultado.textContent = "Seleccione un tipo de comida.";
        return;
    }

    let deportesSeleccionados = [];
    let deportes = document.querySelectorAll('input[name="deporte"]:checked');
    deportes.forEach(deporte => deportesSeleccionados.push(deporte.value));

    let mensaje = `Tipo de comida: ${tipoComida.value}<br>`;
    if (deportesSeleccionados.length > 0) {
        mensaje += `Deportes favoritos: ${deportesSeleccionados.join(", ")}`;
    } else {
        mensaje += "No se seleccionaron deportes favoritos.";
    }
    resultado.innerHTML = mensaje;
}
