function verificarRespuestas() {
    let correctas = 0;
    correctas += parseInt(document.getElementById("pregunta1").value);
    correctas += parseInt(document.getElementById("pregunta2").value);
    correctas += parseInt(document.getElementById("pregunta3").value);
    correctas += parseInt(document.getElementById("pregunta4").value);

    document.getElementById("correctas").value = correctas;
    document.getElementById("incorrectas").value = 4 - correctas;
}