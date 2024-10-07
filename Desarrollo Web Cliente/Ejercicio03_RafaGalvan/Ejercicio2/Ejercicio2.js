let A = parseInt(prompt("Ingrese un valor entero para A:"));
let B = parseInt(prompt("Ingrese un valor entero para B:"));
let C = parseInt(prompt("Ingrese un valor entero para C:"));
let D = parseInt(prompt("Ingrese un valor entero para D:"));

let temporal = B;
B = C;
C = A;
A = D;
D = temporal;

document.write(`<p>Nuevo valor de A: ${A}</p>
    <p>Nuevo valor de B: ${B}</p>
    <p>Nuevo valor de C: ${C}</p>
    <p>Nuevo valor de D: ${D}</p>
`);