let promise = job();
promise
    .then(function () {
        console.log('First then');
    })
    .then(function () {
        console.log('Second then');
    })
    .then(function () {
        console.log('Third then');
    })
    .catch(function () {
        console.log('First error');
    })
    .then(function () {
        console.log('Fourth then');
    });

// Salida esperada:

// Si job() retorna una promesa resuelta:
// First then
// Second then
// Third then
// Fourth then

// Si job() retorna una promesa rechazada:

// nginx
// Copiar
// Editar
// First error
// Fourth then

// Si la promesa se resuelve, se ejecutan todos los .then().
// Si la promesa se rechaza, se ejecuta el .catch(), y luego sigue el último .then().

    