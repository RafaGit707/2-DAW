// 1. Operaciones Básicas con Arrays
// Crear arrays con valores aleatorios:
let array = Array.from({ length: n }, () => Math.floor(Math.random() * (max - min + 1)) + min);

// Buscar el valor mínimo/máximo:
let minValue = Math.min(...array);
let maxValue = Math.max(...array);

// Sumar valores de un array:
let sum = array.reduce((acc, val) => acc + val, 0);

// Filtrar valores según condición (e.g., mayores que 50):
let filteredArray = array.filter(val => val > 50);

// Eliminar elementos específicos:
array = array.filter(val => val !== valorAEliminar);

// Insertar y eliminar elementos usando push, pop, shift, unshift, splice:
array.push(1);      // Añadir al final
array.pop();        // Eliminar el último
array.unshift(0);   // Añadir al principio
array.shift();      // Eliminar el primero
array.splice(index, deleteCount, ...itemsToAdd); // Eliminar e insertar

// 2. Ordenar Arrays
// Ordenar de mayor a menor o viceversa:
array.sort((a, b) => b - a); // Mayor a menor
array.sort((a, b) => a - b); // Menor a mayor

// 3. Convertir Arrays a Strings
// Método join() y toString():
let joinedString = array.join(" "); // Puede usar espacio, coma, <br>, etc.
let stringWithToString = array.toString();

// Comparación join() y toString():
if (array.join() === array.toString()) {
    console.log("Ambos métodos producen el mismo resultado.");
}

// 4. Funciones en JavaScript
// Calcular Factorial:
function factorial(n) {
    let result = 1;
    for (let i = 1; i <= n; i++) result *= i;
    return result;
}

// Contar ocurrencias de una letra:
function contadorDeLetras(cadena1, cadena2, letra) {
    let cuenta1 = [...cadena1.toLowerCase()].filter(c => c === letra).length;
    let cuenta2 = [...cadena2.toLowerCase()].filter(c => c === letra).length;
    return cuenta1 > cuenta2 ? cadena1 : cadena2;
}

// 5. Manipulación del DOM (para presupuesto estimado)
// Obtener valor de checkbox y select:
document.getElementById("checkboxID").checked; // true o false
document.getElementById("selectID").value; // Obtiene el valor del select

//Función para calcular presupuesto:
function calcularPresupuesto() {
    let total = 0;
    document.querySelectorAll("input[type='checkbox']:checked").forEach(() => total += 50);

    let tipo = document.querySelector("select[name='tipoPagina']").value;
    if (tipo === "Comercio") total += 300;
    else if (tipo === "Restaurantes y bares") total += 350;
    else if (tipo === "Gestorias") total += 475;
    else if (tipo === "Automovilismo") total += 350;

    document.getElementById("precio").value = total + " €";
}

// Acumulador en un Bucle do while:
let total = 0, valor;
do {
    valor = parseInt(prompt("Ingrese un valor:"));
    if (valor !== 9999) {
        total += valor;
    }
} while (valor !== 9999);
document.write("Total acumulado: " + total);

// Usados para almacenar sumas totales o contar repeticiones.
let total2 = 0;
for (let i = 0; i < 5; i++) {
    let value = parseInt(prompt("Enter value"));
    total += value;
}

// 4. Simulación de Examen Múltiple Choice

//<select id="pregunta1">
//    <option value="0">Londres</option>
//    <option value="1">París</option>
//</select>
//<button onclick="verificarRespuestas()">Verificar</button>
//<input type="text" id="correctas" readonly>

function verificarRespuestas() {
    let correctas = parseInt(document.getElementById("pregunta1").value);
    document.getElementById("correctas").value = correctas;
}