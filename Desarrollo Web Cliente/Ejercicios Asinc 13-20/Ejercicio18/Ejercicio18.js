const p1 = new Promise((resolve) => {
    setTimeout(() => {
        console.log('First Promise');
        resolve("First");
    }, 1000);
});

const p2 = new Promise((resolve) => {
    setTimeout(() => {
        console.log('Second Promise');
        resolve('Second');
    }, 2000);
});

const p3 = new Promise((resolve) => {
    setTimeout(() => {
        console.log('Third Promise');
        resolve("Third");
    }, 10000);
});

Promise.all([p1, p2, p3])
    .then(console.log)
    .catch(() => console.log('error'));

// Salida esperada:

// (Después de 1 segundo) First Promise
// (Después de 2 segundos) Second Promise
// (Después de 10 segundos) Third Promise
// ["First", "Second", "Third"]

// Si alguna falla, se muestra:

// error