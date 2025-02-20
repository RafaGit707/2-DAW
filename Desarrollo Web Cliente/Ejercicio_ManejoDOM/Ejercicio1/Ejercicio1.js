function calcularImporte() {
    let tipoHabitacion = document.getElementById("habitacion").value;
    let numeroNoches = document.getElementById("noches").value;
    let numeroPersonas = document.getElementById("personas").value;
    let totalImporte = document.getElementById("totalImporte");

    if (tipoHabitacion === "" || numeroNoches === "") {
        totalImporte.textContent = "Seleccione el tipo de habitación y el número de noches.";
        return;
    }

    let importe = parseInt(tipoHabitacion) * parseInt(numeroNoches) * parseInt(numeroPersonas);
    totalImporte.textContent = `${importe} €`;
}
