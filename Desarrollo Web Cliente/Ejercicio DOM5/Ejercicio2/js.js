function sumarUno() {
    const contador = document.getElementById("contador");
    let valorActual = parseInt(contador.textContent);
    contador.textContent = valorActual + 1;
}