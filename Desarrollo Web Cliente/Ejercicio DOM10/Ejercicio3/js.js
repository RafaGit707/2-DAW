document.addEventListener("DOMContentLoaded", function() {
  
    const usuarios = [];

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
        usuarios.push({ nombre, edad });
    });

    document.getElementById('copiarListaBtn').addEventListener('click', copiarLista);
    document.getElementById('eliminarPorEdadBtn').addEventListener('click', eliminarPorEdad);


    function copiarLista() {
        const listaCopiada = document.getElementById('listaCopiada');
        listaCopiada.innerHTML = '';

        usuarios.forEach(usuario => {
            const li = document.createElement('li');
            li.textContent = `${usuario.nombre} (${usuario.edad} años)`;
            listaCopiada.appendChild(li);
        });
    }

    function eliminarPorEdad() {
        const edadEliminar = parseInt(document.getElementById('edadEliminar').value);
        const listaOriginal = document.getElementById('listaUsuarios');
        const listaCopiada = document.getElementById('listaCopiada');

        for (let i = listaOriginal.children.length - 1; i >= 0; i--) {
            const li = listaOriginal.children[i];
            const edad = parseInt(li.textContent.match(/\d+/g)[0]);

            if (edad === edadEliminar) {
                listaOriginal.removeChild(li);

                const liCopia = document.createElement('li');
                liCopia.textContent = li.textContent;
                liCopia.classList.add('eliminado');
                listaCopiada.appendChild(liCopia);
            }
        }
    }
  
});
