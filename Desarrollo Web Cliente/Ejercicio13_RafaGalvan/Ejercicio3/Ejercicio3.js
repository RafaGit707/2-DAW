function calcularTotal() {
    let precioPizza = parseInt(document.getElementById("pizzaSelect").value);
    let cantidad = parseInt(document.getElementById("cantidadPizza").value);

    let total = precioPizza * cantidad;
    document.getElementById("importeTotal").value = "$" + total;
}