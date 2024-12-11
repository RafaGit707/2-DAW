document.addEventListener("DOMContentLoaded", () => {
  const tareas = [];
  const listaTareas = document.getElementById("lista-tareas");

  function renderTareas(filtro = "todas") {
      listaTareas.innerHTML = "";

      const tareasFiltradas = tareas.filter(tarea => {
          if (filtro === "completadas") return tarea.completada;
          if (filtro === "pendientes") return !tarea.completada;
          return true;
      });

      tareasFiltradas.forEach((tarea, index) => {
          const tareaDiv = document.createElement("div");
          tareaDiv.className = `task ${tarea.completada ? "completed" : ""}`;

          const textoTarea = document.createElement("span");
          textoTarea.textContent = tarea.texto;

          const botonesDiv = document.createElement("div");
          botonesDiv.className = "buttons";

          const botonCompletar = document.createElement("button");
          botonCompletar.textContent = "Completada";
          botonCompletar.addEventListener("click", () => {
              tarea.completada = !tarea.completada;
              renderTareas(filtro);
          });

          const botonEliminar = document.createElement("button");
          botonEliminar.textContent = "Eliminar";
          botonEliminar.addEventListener("click", () => {
              tareas.splice(index, 1);
              renderTareas(filtro);
          });

          botonesDiv.appendChild(botonCompletar);
          botonesDiv.appendChild(botonEliminar);

          tareaDiv.appendChild(textoTarea);
          tareaDiv.appendChild(botonesDiv);

          listaTareas.appendChild(tareaDiv);
      });
  }

  document.getElementById("agregar-tarea").addEventListener("click", () => {
      const inputTarea = document.getElementById("nueva-tarea");
      const texto = inputTarea.value.trim();

      if (texto) {
          tareas.push({ texto, completada: false });
          inputTarea.value = "";
          renderTareas();
      }
  });

  document.getElementById("ver-todas").addEventListener("click", () => renderTareas("todas"));
  document.getElementById("ver-completadas").addEventListener("click", () => renderTareas("completadas"));
  document.getElementById("ver-pendientes").addEventListener("click", () => renderTareas("pendientes"));

  renderTareas();
});