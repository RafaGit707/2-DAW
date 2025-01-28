document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.getElementById("formulario");
    const passwordInput = document.getElementById("password");
    const passwordFeedback = document.getElementById("password-feedback");
    const resultado = document.getElementById("resultado");
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    const dniRegex = /^\d{8}[A-Za-z]$/;

    formulario.addEventListener("submit", (e) => {
        e.preventDefault();

        const passwordValue = passwordInput.value;
        if (!passwordRegex.test(passwordValue)) {
            passwordFeedback.textContent = "La contraseña debe ser moderada (8 caracteres, al menos una letra y un número).";
            passwordFeedback.style.color = "red";
            return;
        } else {
            passwordFeedback.textContent = "";
        }

        const dniInput = document.getElementById("dni").value;
        if (!dniRegex.test(dniInput)) {
            alert("El DNI no es válido. Debe tener 8 dígitos seguidos de una letra.");
            return;
        }

        const formData = new FormData(formulario);
        const datos = Object.fromEntries(formData.entries());
        datos.fechaAlta = new Date().toISOString();
        localStorage.setItem(datos.nickname, JSON.stringify(datos));
        alert("Usuario registrado exitosamente");
        resultado.innerHTML = "";
    });

    passwordInput.addEventListener("input", () => {
        if (passwordRegex.test(passwordInput.value)) {
            passwordFeedback.textContent = "Contraseña válida.";
            passwordFeedback.style.color = "green";
        } else {
            passwordFeedback.textContent = "La contraseña debe ser moderada.";
            passwordFeedback.style.color = "red";
        }
    });

    document.getElementById("borrar").addEventListener("click", () => {
        localStorage.clear();
        alert("Todos los datos han sido borrados");
        resultado.innerHTML = "";
    });

    document.getElementById("consultar").addEventListener("click", () => {
        const nickname = document.getElementById("nickname").value;
        const usuario = localStorage.getItem(nickname);

        if (!usuario) {
            alert("Usuario no encontrado");
            return;
        }

        const datos = JSON.parse(usuario);
        resultado.innerHTML = `
            <table>
                <tr><th>Nickname</th><td>${datos.nickname}</td></tr>
                <tr><th>Nombre</th><td>${datos.nombre}</td></tr>
                <tr><th>DNI</th><td>${datos.dni}</td></tr>
                <tr><th>Edad</th><td>${datos.edad}</td></tr>
                <tr><th>Fecha de Alta</th><td>${datos.fechaAlta}</td></tr>
            </table>
        `;
    });

    document.getElementById("ultimo").addEventListener("click", () => {
        let ultimoUsuario = null;

        for (let i = 0; i < localStorage.length; i++) {
            const clave = localStorage.key(i);
            const usuario = JSON.parse(localStorage.getItem(clave));

            if (!ultimoUsuario || new Date(usuario.fechaAlta) > new Date(ultimoUsuario.fechaAlta)) {
                ultimoUsuario = usuario;
            }
        }

        if (ultimoUsuario) {
            resultado.innerHTML = `
                <h2>Último Usuario:</h2>
                <pre>${JSON.stringify(ultimoUsuario, null, 2)}</pre>
            `;
        } else {
            alert("No hay usuarios registrados");
        }
    });

    document.getElementById("listar").addEventListener("click", () => {
        resultado.innerHTML = "<h2>Todos los Usuarios</h2>";
        const tabla = document.createElement("table");
        tabla.innerHTML = `
            <tr>
                <th>Nickname</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Edad</th>
                <th>Fecha de Alta</th>
            </tr>
        `;

        for (let i = 0; i < localStorage.length; i++) {
            const clave = localStorage.key(i);
            const usuario = JSON.parse(localStorage.getItem(clave));
            tabla.innerHTML += `
                <tr>
                    <td>${usuario.nickname}</td>
                    <td>${usuario.nombre}</td>
                    <td>${usuario.dni}</td>
                    <td>${usuario.edad}</td>
                    <td>${usuario.fechaAlta}</td>
                </tr>
            `;
        }

        resultado.appendChild(tabla);
    });

    document.getElementById("actualizar").addEventListener("click", () => {
        const nickname = document.getElementById("nickname").value;
        const usuario = localStorage.getItem(nickname);

        if (!usuario) {
            alert("Usuario no encontrado para actualizar");
            return;
        }

        const formData = new FormData(formulario);
        const nuevosDatos = Object.fromEntries(formData.entries());
        nuevosDatos.fechaAlta = JSON.parse(usuario).fechaAlta; // Conserva la fecha original
        localStorage.setItem(nickname, JSON.stringify(nuevosDatos));
        alert("Usuario actualizado exitosamente");
        resultado.innerHTML = "";
    });
});
