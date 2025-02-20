document.addEventListener("DOMContentLoaded", function() {

    const productos = [
        { nombre: 'Laptop', precio: 1200 },
        { nombre: 'Mouse', precio: 25 },
        { nombre: 'Teclado', precio: 45 }
    ];

    const listaProductos = document.getElementById('listaProductos');
    const listaCarrito = document.getElementById('listaCarrito');

    function mostrarProductos() {
        productos.forEach((producto) => {
            const li = document.createElement('li');
            li.innerHTML = `${producto.nombre} - ${producto.precio}€`;
            const button = document.createElement('button');
            button.textContent = 'Añadir al carrito';
            button.addEventListener('click', function() {
                anadirAlCarrito(producto.nombre, producto.precio);
            });
            li.appendChild(button);
            listaProductos.appendChild(li);
        });
    }

    function cargarCarrito() {
        const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        listaCarrito.innerHTML = '';
        carrito.forEach((producto) => {
            const li = document.createElement('li');
            li.textContent = `${producto.nombre} - ${producto.precio}€`;
            listaCarrito.appendChild(li);
        });
    }

    function anadirAlCarrito(nombre, precio) {
        const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        carrito.push({ nombre, precio });
        localStorage.setItem('carrito', JSON.stringify(carrito));
        cargarCarrito();
    }

    function calcularTotal() {
        const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        let total = 0;
        carrito.forEach((producto) => {
            total += producto.precio;
        });
        document.getElementById('total').textContent = `Total: ${total}€`;
    }

    mostrarProductos();
    cargarCarrito();

    document.getElementById('totalSection').querySelector('button').addEventListener('click', calcularTotal);
});
