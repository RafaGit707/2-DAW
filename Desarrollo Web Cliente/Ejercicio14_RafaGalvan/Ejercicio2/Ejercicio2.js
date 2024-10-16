function verificarEdad() {
    let mayorDeEdad = document.querySelector('input[name="edad"]:checked').value;
    if (mayorDeEdad === "sí") {
        alert("Puedes ingresar al sitio.");
    } else {
        alert("No puedes ingresar al sitio.");
    }
}