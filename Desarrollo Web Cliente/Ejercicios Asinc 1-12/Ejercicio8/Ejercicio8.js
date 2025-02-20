function greet(name, callback) {
    console.log('Hello Mr. ' + name);
    setTimeout(() => {
        callback(name);
    }, 3000);
}

function farewell(name) {
    console.log('Goodbye Mr. ' + name);
}

greet('Pepito', farewell);

// Salida esperada
// Hello Mr. Pepito
// (Después de 3 segundos)
// Goodbye Mr. Pepito
