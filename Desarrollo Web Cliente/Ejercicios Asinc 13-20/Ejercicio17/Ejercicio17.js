let firstPromise = new Promise((resolve) => {
    setTimeout(() => resolve('firstPromise'), 5000);
});

let secondPromise = new Promise((resolve) => {
    setTimeout(() => resolve('secondPromise'), 1000);
});

firstPromise
    .then((result) => {
        console.log(result);
        return secondPromise;
    })
    .then((result) => {
        console.log(result);
        console.log('Finish');
    });

// Salida esperada:

// (Después de 5 segundos) firstPromise
// (Después de 1 segundo más) secondPromise
// Finish