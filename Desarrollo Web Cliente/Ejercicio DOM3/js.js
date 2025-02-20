document.addEventListener("DOMContentLoaded", function() {
    const informacionDiv = document.getElementById("informacion");
  
    const enlaces = document.getElementsByTagName("a");
    const numeroEnlaces = enlaces.length;
  
    const penultimoEnlace = enlaces[enlaces.length - 2] ? enlaces[enlaces.length - 2].href : "No hay suficientes enlaces";
    
    let numeroEnlacesPrueba = 0;
    for (let i = 0; i < enlaces.length; i++) {
      if (enlaces[i].href === "http://prueba/") {
        numeroEnlacesPrueba++;
      }
    }
  
    const parrafos = document.getElementsByTagName("p");
    let tercerParrafoEnlaces = 0;
    if (parrafos[2]) {
      const hijosTercerParrafo = parrafos[2].children;
      for (let i = 0; i < hijosTercerParrafo.length; i++) {
        if (hijosTercerParrafo[i].tagName === "A") {
          tercerParrafoEnlaces++;
        }
      }
    }
  
    informacionDiv.innerHTML = `
      <p>Número de enlaces de la página: ${numeroEnlaces}</p>
      <p>Dirección del penúltimo enlace: ${penultimoEnlace}</p>
      <p>Número de enlaces que enlazan a "http://prueba": ${numeroEnlacesPrueba}</p>
      <p>Número de enlaces del tercer párrafo: ${tercerParrafoEnlaces}</p>
    `;
});