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

  let ordenAscendente = true;
  const tablaContainer = document.getElementById("tabla-container");
  const contador = document.getElementById("contador");

  function crearTabla(personasFiltradas) {
    tablaContainer.innerHTML = "";

    const tabla = document.createElement("table");

    const encabezado = document.createElement("thead");
    const filaEncabezado = document.createElement("tr");
    const thNombre = document.createElement("th");
    thNombre.textContent = "Nombre";
    const thEdad = document.createElement("th");
    thEdad.textContent = "Edad";

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

    contador.textContent = `Resultados: ${personasFiltradas.length}`;
  }

  function filtrarDatos() {
    const textoFiltro = document.getElementById("filtro-nombre").value.toLowerCase();
    const edadMinima = parseInt(document.getElementById("filtro-edad").value, 10) || 0;

    const personasFiltradas = personas.filter(
      (persona) =>
        persona.nombre.toLowerCase().startsWith(textoFiltro) && persona.edad >= edadMinima
    );

    if (ordenAscendente) {
      personasFiltradas.sort((a, b) => a.edad - b.edad);
    } else {
      personasFiltradas.sort((a, b) => b.edad - a.edad);
    }

    crearTabla(personasFiltradas);
  }

  document.getElementById("ordenar-edad").addEventListener("click", () => {
    ordenAscendente = !ordenAscendente;
    const textoBoton = ordenAscendente
      ? "Ordenar por edad (Ascendente)"
      : "Ordenar por edad (Descendente)";
    document.getElementById("ordenar-edad").textContent = textoBoton;
    filtrarDatos();
  });

  document.getElementById("filtro-nombre").addEventListener("keyup", filtrarDatos);
  document.getElementById("filtro-edad").addEventListener("keyup", filtrarDatos);

  document.getElementById("form-persona").addEventListener("submit", (event) => {
    event.preventDefault();
    const nombre = document.getElementById("nombre").value.trim();
    const edad = parseInt(document.getElementById("edad").value, 10);

    if (nombre && edad >= 0) {
      personas.push({ nombre, edad });
      document.getElementById("form-persona").reset();
      filtrarDatos();
    }
  });

  crearTabla(personas);
});