document.addEventListener("DOMContentLoaded", function() {
  const personas = [
    { nombre: "dardo", edad: 52 },
    { nombre: "pedro", edad: 522 },
    { nombre: "ana", edad: 89 },
    { nombre: "alicia", edad: 55 },
    { nombre: "carlos", edad: 21 },
    { nombre: "capitanich", edad: 89 },
    { nombre: "carla", edad: 66 },
    { nombre: "altina", edad: 90 }
  ];

  const tablaContainer = document.getElementById("tabla-container");
  
  function crearTabla(personasFiltradas) {
    tablaContainer.innerHTML = "";

    const tabla = document.createElement("table");

    const encabezado = document.createElement("thead");
    const filaEncabezado = document.createElement("tr"); const thNombre = document.createElement("th"); thNombre.textContent = "Nombre"; const thEdad = document.createElement("th"); thEdad.textContent = "Edad";

    filaEncabezado.appendChild(thNombre);
    filaEncabezado.appendChild(thEdad);
    encabezado.appendChild(filaEncabezado);
    tabla.appendChild(encabezado);

    const cuerpoTabla = document.createElement("tbody");

    personasFiltradas.forEach((persona) => {
      const fila = document.createElement("tr");
      const celdaNombre = document.createElement("td");
      const celdaEdad = document.createElement("td");

      celdaNombre.textContent = persona.nombre;
      celdaEdad.textContent = persona.edad;

      fila.appendChild(celdaNombre);
      fila.appendChild(celdaEdad);
      cuerpoTabla.appendChild(fila);
    });

    tabla.appendChild(cuerpoTabla);
    tablaContainer.appendChild(tabla);
  }

  document.getElementById("filtro").addEventListener("keyup", (event) => {
    const textoFiltro = event.target.value.toLowerCase();
    const personasFiltradas = personas.filter((persona) => persona.nombre.toLowerCase().startsWith(textoFiltro)
  );
  crearTabla(personasFiltradas);
  });

  crearTabla(personas);
});