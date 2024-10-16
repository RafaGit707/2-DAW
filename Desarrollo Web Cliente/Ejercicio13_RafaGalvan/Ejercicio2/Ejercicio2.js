function calcularPresupuesto() {
    let procesador = parseInt(document.getElementById("procesador").value);
    let monitor = parseInt(document.getElementById("monitor").value);
    let disco = parseInt(document.getElementById("disco").value);

    let total = procesador + monitor + disco;
    document.getElementById("presupuestoTotal").value = "$" + total;
}