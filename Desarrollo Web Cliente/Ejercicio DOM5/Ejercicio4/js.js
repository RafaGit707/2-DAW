function mostrarFilaTabla() {
    const primeraFila = document.querySelector("table tr:first-child");
    const celdas = primeraFila.children;

    for (let i = 0; i < celdas.length; i++) {
    alert(`Texto de la celda ${i + 1}: ${celdas[i].textContent}`);
    }
}