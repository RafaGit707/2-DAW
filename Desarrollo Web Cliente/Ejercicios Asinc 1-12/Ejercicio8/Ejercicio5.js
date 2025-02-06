function first() {
    console.log(1)
}
function second() {
setTimeout(() => {
console.log(2)
}, 0)
}
function third() {
console.log(3)
}
first()
second()
third()

// Salida esperada:
// 1
// 3
// 2

// first() y third() se ejecutan de manera síncrona, mostrando "1" y "3"
// second() usa setTimeout con 0 ms, por lo que se ejecuta después del flujo principal
