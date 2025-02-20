function hellishFunction() {
    setTimeout(() => {
        console.log(1);
        setTimeout(() => {
            console.log(2);
            setTimeout(() => {
                console.log(3);
            }, 500);
        }, 2000);
    }, 1000);
}

hellishFunction();

// Salida esperada
// (Después de 1 segundo) -> 1
// (Después de 3 segundos en total) -> 2
// (Después de 3.5 segundos en total) -> 3
// setTimeout inicial espera 1 segundo y muestra 1.
// Después de 1 + 2 segundos (3 en total) muestra 2.
// Después de 3 + 0.5 segundos (3.5 en total) muestra 3.
