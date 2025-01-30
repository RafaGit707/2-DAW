setTimeout(function() {
    console.log("Timeout");
}, 1000);
function randomFunction() {
    console.log("Function");
}
console.log("Main Block");

// Salida esperada:
// Main Block
// Function
// Timeout

// console.log("Main Block") se ejecuta primero porque esta en el flujo principal
// randomFunction() es llamada después, mostrando "Function"
// setTimeout se ejecuta después de 1000 ms, por lo que se muestra último
