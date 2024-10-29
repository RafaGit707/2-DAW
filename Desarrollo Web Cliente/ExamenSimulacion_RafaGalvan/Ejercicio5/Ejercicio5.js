function calcularPresupuesto() {
    let checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    let total = checkboxes.length * 50;

    let select = document.querySelector('select[name="precio"]').value;

    if (select === "Comercio") {
        total += 300;
    } else if (select === "Restaurantes y bares") {
        total += 350;
    } else if (select === "Gestorias") {
        total += 475;
    } else if (select === "Automovilismo") {
        total += 350;
    }

    document.getElementById("precio").value = total;
}