(function() {
    console.log(10);
    setTimeout(function(){console.log(20)}, 1000);
    setTimeout(function(){console.log(30)}, 0);
    console.log(40);
})();

// Salida esperada:
// 10
// 40
// 30
// 20

// console.log(10) se ejecuta primero
// setTimeout(function(){console.log(30)}, 0) se ejecuta después de los logs síncronos
// console.log(40) se ejecuta a continuación
// setTimeout(function(){console.log(20)}, 1000) tiene un retraso de 1000 ms, por lo que se muestra último
