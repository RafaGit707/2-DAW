function asyncPi() {
    const pi = 3.14;
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve(pi);
        }, 5000);
    });
}

asyncPi().then(console.log);

// Muestra 3.14 después de 5 segundos
