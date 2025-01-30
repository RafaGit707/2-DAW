setTimeout(function() { console.log("Timeout"); }, 1000);
function randomFunction() { console.log("Function"); }
randomFunction();
console.log("Main Block");

// Salida esperada:
// Function
// Main Block
// Timeout

// randomFunction() es llamada antes de "Main Block", mostrando "Function".
// El resto sigue el mismo flujo que en el ejercicio anterior, primero "Main Block", y luego "Timeout".