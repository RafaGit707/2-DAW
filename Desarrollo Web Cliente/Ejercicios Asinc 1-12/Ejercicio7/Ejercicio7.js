function greet(name, callback) {
    console.log('Hello Mr. ' + name);
    callback();
}

function farewell() {
    console.log('Goodbye Mr. Jose');
}

greet('Pepito', farewell);

// Salida esperada
// Hello Mr. Pepito
// Goodbye Mr. Jose
