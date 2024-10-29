let pantalla = document.getElementById('pantalla');
let operacionActual = '';
let resultado = 0;

pantalla.value = '0';

function agregarNumero(num) {
    if (pantalla.value === '0') {
        pantalla.value = num;
    } else {
        pantalla.value += num;
    }
}

function mostrarOperacionSimbolo(simbolo) {
    pantalla.value += ' ' + simbolo + ' ';
}

function sumar() {
    realizarOperacion();
    mostrarOperacionSimbolo('+');
}

function restar() {
    realizarOperacion();
    mostrarOperacionSimbolo('-');
}

function multiplicar() {
    realizarOperacion();
    mostrarOperacionSimbolo('×');
}

function dividir() {
    realizarOperacion();
    mostrarOperacionSimbolo('÷');
}

function realizarOperacion() {
    const valorActual = parseFloat(pantalla.value.split(' ').pop());
    if (resultado === 0) {
        resultado = valorActual;
    } else {
        switch (pantalla.value.split(' ')[1]) {
            case '+':
                resultado += valorActual;
                break;
            case '-':
                resultado -= valorActual;
                break;
            case '×':
                resultado *= valorActual;
                break;
            case '÷':
                if (valorActual !== 0) {
                    resultado /= valorActual;
                } else {
                    alert("No se puede dividir por cero");
                    resultado = 0;
                }
                break;
        }
    }
}

function igual() {
    realizarOperacion();
    pantalla.value = resultado;
    resultado = 0;
}

function borrar() {
    const valorActual = pantalla.value;
    if (valorActual.length === 1) {
        pantalla.value = '0';
    } else {
        pantalla.value = valorActual.slice(0, -1);
    }
}

function borrarTodo() {
    pantalla.value = '0';
    resultado = 0;
}
