function isANumber(data) {
    return new Promise((resolve, reject) => {
        if (typeof data !== 'number') {
            setTimeout(() => reject('Not a Number'), 1000);
        } else {
            setTimeout(() => resolve(`${data} is a number`), 10000);
        }
    });
}

isANumber(5).then(console.log).catch(console.error); // Muestra "5 is a number" después de 10 segundos
isANumber("text").then(console.log).catch(console.error); // Muestra "Not a Number" después de 1 segundo
