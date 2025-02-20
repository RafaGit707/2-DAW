document.addEventListener("DOMContentLoaded", function () {
    const productList = [];
    const deletedProducts = [];
    
    const productInput = document.getElementById("product-name");
    const priceInput = document.getElementById("product-price");
    const addButton = document.getElementById("add-product");
    const productListContainer = document.getElementById("product-list");
    const deleteInput = document.getElementById("delete-product");
    const deleteButton = document.getElementById("delete-btn");
    const deletedListContainer = document.getElementById("deleted-list");
    const copyButton = document.getElementById("copy-list");
    const copiedListContainer = document.getElementById("copied-list");

    // 1. Lista Productos
    addButton.addEventListener("click", function () {
        const name = productInput.value.trim();
        const price = parseFloat(priceInput.value);
        if (name && !isNaN(price)) {
            productList.push({ name, price });
            renderProductList();
            productInput.value = "";
            priceInput.value = "";
        }
    });

    function renderProductList() {
        productListContainer.innerHTML = "";
        productList.forEach(product => {
            const item = document.createElement("li");
            item.textContent = `${product.name} - ${product.price.toFixed(2)}€`;
            if (product.price > 50) {
                item.style.color = "red";
            } else if (product.price >= 20 && product.price <= 50) {
                item.style.color = "green";
            }
            productListContainer.appendChild(item);
        });
    }

    // 2. Borrar y Copiar Productos

    // a) Copiar
    copyButton.addEventListener("click", function () {
        renderCopyList();
    });

    function renderCopyList() {
        copiedListContainer.innerHTML = "";
        productList.forEach(product => {
            const item = document.createElement("li");
            item.textContent = `${product.name} - ${product.price.toFixed(2)}€`;
            item.style.color = "gray";
            copiedListContainer.appendChild(item);
        });
    }

    // b) Borrar
    deleteButton.addEventListener("click", function () {
        const name = deleteInput.value.trim();
        const index = productList.findIndex(p => p.name === name);
        if (index !== -1) {
            deletedProducts.push(productList.splice(index, 1)[0]);
            renderProductList();
            renderDeletedList();
            deleteInput.value = "";
        }
    });

    function renderDeletedList() {
        deletedListContainer.innerHTML = "";
        deletedProducts.forEach(product => {
            const item = document.createElement("li");
            item.textContent = `${product.name} - ${product.price.toFixed(2)}€`;
            item.style.textDecoration = "line-through";
            item.style.color = "gray";
            deletedListContainer.appendChild(item);
        });
    }

    // 3. Biblioteca Digital
    const books = JSON.parse(localStorage.getItem("books")) || [];
    
    // Registrar libro
    document.getElementById("register-book").addEventListener("click", function () {
        const isbn = document.getElementById("isbn").value;
        const titulo = document.getElementById("titulo").value;
        const autor = document.getElementById("autor").value;
        const ano = document.getElementById("ano").value;
        
        if (isbn && titulo && autor && ano) {
            books.push({ isbn, titulo, autor, ano });
            localStorage.setItem("books", JSON.stringify(books));
            alert("Libro registrado correctamente.");
        }
    });
    
    // Mostrar libros
    document.getElementById("show-books").addEventListener("click", function () {
        const bookListContainer = document.getElementById("book-list");
        bookListContainer.innerHTML = "";
        books.forEach(book => {
            const row = document.createElement("tr");
            row.innerHTML = `<td>${book.isbn}</td><td>${book.titulo}</td><td>${book.autor}</td><td>${book.ano}</td>`;
            bookListContainer.appendChild(row);
        });
    });
    
    // Buscar libro por ISBN
    document.getElementById("search-book").addEventListener("click", function () {
        const isbn = document.getElementById("search-isbn").value;
        const book = books.find(b => b.isbn === isbn);
        alert(book ? `Título: ${book.titulo}, Autor: ${book.autor}, Año: ${book.ano}` : "Libro no encontrado.");
    });
    
    // Contar todos los libros de un autor
    document.getElementById("count-books").addEventListener("click", function () {
        const autor = document.getElementById("search-autor").value;
        const count = books.filter(b => b.autor === autor).length;
        alert(`Libros registrados de ${autor}: ${count}`);
    });
    
    // Modificar libro
    document.getElementById("modify-book").addEventListener("click", function () {
        const isbn = document.getElementById("modify-isbn").value;
        const book = books.find(b => b.isbn === isbn);
        if (book) {
            book.titulo = document.getElementById("modify-titulo").value;
            book.autor = document.getElementById("modify-autor").value;
            book.ano = document.getElementById("modify-ano").value;
            localStorage.setItem("books", JSON.stringify(books));
            alert("Libro modificado correctamente.");
        } else {
            alert("Libro no encontrado.");
        }
    });
});
