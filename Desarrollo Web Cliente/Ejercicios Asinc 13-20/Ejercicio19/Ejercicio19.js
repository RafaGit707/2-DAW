const p2 = new Promise((resolve, reject) => {
    setTimeout(() => {
        console.log('Second Promise');
        reject('Second');
    }, 2000);
});


// Salida esperada
// (Después de 1 segundo) First Promise
// (Después de 2 segundos) Second Promise
// error
