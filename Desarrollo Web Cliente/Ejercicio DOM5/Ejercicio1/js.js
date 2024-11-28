function cantidadHijos() {
    const bloque1 = document.getElementById("bloque1");
    const bloque2 = document.getElementById("bloque2");

    alert(`Bloque 1 - Nodos hijos: ${bloque1.childNodes.length}`);
    alert(`Bloque 2 - Nodos hijos: ${bloque2.childNodes.length}`);
}

function cantidadHijosElemento() {
    const bloque1 = document.getElementById("bloque1");
    const bloque2 = document.getElementById("bloque2");

    alert(`Bloque 1 - Nodos tipo elemento: ${bloque1.children.length}`);
    alert(`Bloque 2 - Nodos tipo elemento: ${bloque2.children.length}`);
}