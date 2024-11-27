document.addEventListener("DOMContentLoaded", function() {
    const informacionDiv = document.getElementById("informacion");
  
    const enlaces = document.getElementsByTagName("a");
    const numeroEnlaces = enlaces.length;
  
    const penultimoEnlace = enlaces[enlaces.length - 2] ? enlaces[enlaces.length - 2].href : "No hay suficientes enlaces";
  
    const enlacesPrueba = Array.from(enlaces).filter(enlace => enlace.href.match("http://prueba"));
    const numeroEnlacesPrueba = enlacesPrueba.length;
  
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