document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("intercambiarFilasBtn").addEventListener("click", function () {
    const tabla = document.getElementById("tabla");
    const tbody = tabla.querySelector("tbody");
    const filas = tbody.rows;

    if (filas.length >= 2) {
      const primeraFila = filas[0];
      const ultimaFila = filas[filas.length - 1];

      const primeraFilaClonada = primeraFila.cloneNode(true);
      const ultimaFilaClonada = ultimaFila.cloneNode(true);

      tbody.replaceChild(ultimaFilaClonada, primeraFila);
      tbody.replaceChild(primeraFilaClonada, ultimaFila);
    } else {
      alert("No hay suficientes filas para realizar el intercambio.");
    }
  });
});