for (var i = 0; i < 3; i++) {
    setTimeout(function() { console.log(i); }, i * 1000);
}

// Salida esperada:
// 3
// 3
// 3

// El ciclo for usa var, lo que significa que la variable i se comparte
// El valor de i al finalizar el ciclo es 3, por lo que todos muestran "3" después del tiempo correspondiente