document.addEventListener("DOMContentLoaded", function() {

    const consulta = document.getElementById("consulta");
    const usuarios = document.getElementById("usuarios");
    const infoUsuario = document.getElementById("infoUsuario");
    const userId = document.getElementById("userId");
    const userName = document.getElementById("userName");
    const userUsername = document.getElementById("userUsername");
    const userEmail = document.getElementById("userEmail");
    const userPhone = document.getElementById("userPhone");
    const userCompany = document.getElementById("userCompany");

    consulta.addEventListener("click", function () {
        let selectedUserId = usuarios.value;
        
        if (usuarios.options.length === 1) {
            fetch('https://jsonplaceholder.typicode.com/users')
                .then(response => response.json())
                .then(data => {
                    data.forEach(user => {
                        let option = document.createElement("option");
                        option.value = user.id;
                        option.textContent = user.name;
                        usuarios.appendChild(option);
                    });
                })
                .catch(error => console.error("Error al obtener usuarios:", error));
        } else if (selectedUserId) {
            fetch(`https://jsonplaceholder.typicode.com/users/${selectedUserId}`)
                .then(response => response.json())
                .then(user => {
                    userId.textContent = user.id;
                    userName.textContent = user.name;
                    userUsername.textContent = user.username;
                    userEmail.textContent = user.email;
                    userPhone.textContent = user.phone;
                    userCompany.textContent = user.company.name;
                    infoUsuario.classList.remove("hidden");
                })
                .catch(error => console.error("Error al obtener datos del usuario:", error));
        }
    });
});
