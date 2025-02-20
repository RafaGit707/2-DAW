document.addEventListener("DOMContentLoaded", function() {
  
    document.getElementById('usuarioForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const nombre = document.getElementById('nombre').value;
        const edad = parseInt(document.getElementById('edad').value);
        const lista = document.getElementById('listaUsuarios');
        const li = document.createElement('li');

        li.textContent = `${nombre} (${edad} años)`;

        if (edad >= 65) {
            li.classList.add('mayores');
        } else if (edad >= 18) {
            li.classList.add('adultos');
        } else {
            li.classList.add('predeterminado');
        }

        lista.appendChild(li);
    });
  
});