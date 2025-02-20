const mainFunction = (callback) => {
    setTimeout(() => {
        callback([10, 3, 7]);
    }, 3000);
}

const addFunction = (array) => {
    let sum = 0;
    for (let i of array) {
        sum += i;
    }
    console.log(sum);
}

mainFunction(addFunction);


// Salida esperada:
// (Después de 3 segundos) -> 20
// mainFunction espera 3 segundos antes de llamar a addFunction.
// addFunction recibe [10, 3, 7], suma sus valores (10 + 3 + 7 = 20) y lo imprime.
