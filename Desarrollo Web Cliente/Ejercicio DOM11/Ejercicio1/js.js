document.addEventListener("DOMContentLoaded", function() {

  const tareaForm = document.getElementById('tareaForm');
  const tareaInput = document.getElementById('tareaInput');
  const listaTareas = document.getElementById('listaTareas');

  function cargarTareas() {
    const tareas = JSON.parse(localStorage.getItem('tareas')) || [];
    listaTareas.innerHTML = '';
    tareas.forEach((tarea, index) => {
        const li = document.createElement('li');
        li.textContent = tarea;
        listaTareas.appendChild(li);
    });
  }

  function anadirTarea(event) {
    event.preventDefault();
    const nuevaTarea = tareaInput.value.trim();
    if (nuevaTarea) {
        const tareas = JSON.parse(localStorage.getItem('tareas')) || [];
        tareas.push(nuevaTarea);
        localStorage.setItem('tareas', JSON.stringify(tareas));
        tareaInput.value = '';
        cargarTareas();
    }
  }

  document.getElementById('actualizar').addEventListener('click', anadirTarea);

  cargarTareas();

});