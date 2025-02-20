function buildCar(name, callback) {
    setTimeout(() => {
        console.log('Building a ' + name);
        callback(name);
    }, 1000);
}

function defineCar(name) {
    console.log('This car is a ' + name);
}

buildCar('Ford Focus', defineCar);


// Salida esperada
// (Después de 1 segundo)
// Building a Ford Focus
// This car is a Ford Focus
