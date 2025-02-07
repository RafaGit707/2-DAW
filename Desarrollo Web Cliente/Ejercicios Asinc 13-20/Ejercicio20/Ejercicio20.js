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

const p3 = new Promise((_, reject) => {
    setTimeout(() => {
        console.log('Third Promise');
        reject("Third");
    }, 2000);
});

Promise.race([p1, p2, p3])
    .then(console.log)
    .catch(() => console.log('error'));


// Salida esperada
// (Después de 1 segundo) First Promise
// "First"
// Si la primera en resolverse fuera una fallida, imprimiría:
// error

