const first = () => console.log('First');
const second = () => setTimeout(() => console.log('Second'));
const third = () => console.log('Third');

// Salida esperada:
// First
// Third
// Second

// first() se ejecuta primero, mostrando "First".
// third() se ejecuta a continuación, mostrando "Third".
// second() programa un setTimeout de 0 ms, que se ejecuta después del flujo principal, mostrando "Second".