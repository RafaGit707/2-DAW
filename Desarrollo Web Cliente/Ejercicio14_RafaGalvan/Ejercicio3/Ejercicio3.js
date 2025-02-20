function mostrarDatos() {
    let nombre = document.getElementById('nombre').value;
    let email = document.getElementById('email').value;
    let comentarios = document.getElementById('comentarios').value;

    alert("Nombre: " + nombre + "\nCorreo electrónico: " + email + "\nComentarios: " + comentarios);
}