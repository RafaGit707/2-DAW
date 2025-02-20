function mostrarPrecio() {
    let pizzaSelect = document.getElementById("pizzaSelect");
    let precio = pizzaSelect.value;
    document.getElementById("precioPizza").value = "$" + precio;
}