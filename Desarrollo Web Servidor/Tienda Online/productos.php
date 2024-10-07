<?php

class Comentario {
    private $usuario;
    private $texto;

    public function __construct($usuario, $texto) {
        $this->usuario = $usuario;
        $this->texto = $texto;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getTexto() {
        return $this->texto;
    }
}

class Producto {
    private $nombre;
    private $precio;
    private $descripcion;
    private $comentarios;

    public function __construct($nombre, $precio, $descripcion, $comentarios = []) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->comentarios = $comentarios;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getComentarios() {
        return $this->comentarios;
    }
}

function obtenerProductosPorSeccion($id) {
    $productos = [
        'Software' => [
            new Producto("Software A", 49.99, "Descripción del Software A", [
                new Comentario("Usuario1", "Comentario sobre Software A"),
                new Comentario("Usuario2", "Me gusta mucho este software.")
            ]),
            new Producto("Software B", 59.99, "Descripción del Software B", [
                new Comentario("Usuario3", "Muy útil para mis tareas."),
                new Comentario("Usuario4", "Excelente software.")
            ]),
            new Producto("Software C", 69.99, "Descripción del Software C", [
                new Comentario("Usuario5", "Buena opción."),
                new Comentario("Usuario6", "Recomendado para todos.")
            ]),
            new Producto("Software D", 79.99, "Descripción del Software D", [
                new Comentario("Usuario7", "Funciona perfectamente."),
                new Comentario("Usuario8", "Gran soporte.")
            ]),
            new Producto("Software E", 89.99, "Descripción del Software E", [
                new Comentario("Usuario9", "Me encanta."),
                new Comentario("Usuario10", "Lo mejor que he probado.")
            ]),
            new Producto("Software F", 99.99, "Descripción del Software F", [
                new Comentario("Usuario11", "Imprescindible."),
                new Comentario("Usuario12", "Excelente rendimiento.")
            ]),
            new Producto("Software G", 29.99, "Descripción del Software G", [
                new Comentario("Usuario13", "Sencillo y efectivo."),
                new Comentario("Usuario14", "Perfecto para principiantes.")
            ]),
            new Producto("Software H", 39.99, "Descripción del Software H", [
                new Comentario("Usuario15", "Muy práctico."),
                new Comentario("Usuario16", "Funciona bien.")
            ]),
            new Producto("Software I", 19.99, "Descripción del Software I", [
                new Comentario("Usuario17", "Barato y funcional."),
                new Comentario("Usuario18", "Lo uso a diario.")
            ]),
            new Producto("Software J", 89.99, "Descripción del Software J", [
                new Comentario("Usuario19", "Fantástico."),
                new Comentario("Usuario20", "Altamente recomendable.")
            ]),
        ],
        'Hardware' => [
            new Producto("Hardware A", 299.99, "Descripción del Hardware A", [
                new Comentario("Usuario21", "Gran rendimiento."),
                new Comentario("Usuario22", "Es muy bueno.")
            ]),
            new Producto("Hardware B", 399.99, "Descripción del Hardware B", [
                new Comentario("Usuario23", "Excelente calidad."),
                new Comentario("Usuario24", "Rápido y fiable.")
            ]),
            new Producto("Hardware C", 499.99, "Descripción del Hardware C", [
                new Comentario("Usuario25", "Increíble capacidad."),
                new Comentario("Usuario26", "Totalmente satisfecho.")
            ]),
            new Producto("Hardware D", 199.99, "Descripción del Hardware D", [
                new Comentario("Usuario27", "Muy recomendable."),
                new Comentario("Usuario28", "Funciona como se espera.")
            ]),
            new Producto("Hardware E", 99.99, "Descripción del Hardware E", [
                new Comentario("Usuario29", "Gran valor por el precio."),
                new Comentario("Usuario30", "No puedo pedir más.")
            ]),
            new Producto("Hardware F", 249.99, "Descripción del Hardware F", [
                new Comentario("Usuario31", "Calidad premium."),
                new Comentario("Usuario32", "Definitivamente vale la pena.")
            ]),
            new Producto("Hardware G", 149.99, "Descripción del Hardware G", [
                new Comentario("Usuario33", "Funciona perfectamente."),
                new Comentario("Usuario34", "Muy feliz con mi compra.")
            ]),
            new Producto("Hardware H", 349.99, "Descripción del Hardware H", [
                new Comentario("Usuario35", "Rendimiento excepcional."),
                new Comentario("Usuario36", "Gran opción para gamers.")
            ]),
            new Producto("Hardware I", 129.99, "Descripción del Hardware I", [
                new Comentario("Usuario37", "Sencillo de usar."),
                new Comentario("Usuario38", "Buena relación calidad-precio.")
            ]),
            new Producto("Hardware J", 299.99, "Descripción del Hardware J", [
                new Comentario("Usuario39", "Altamente recomendable."),
                new Comentario("Usuario40", "Mejora considerable.")
            ]),
        ],
        'Juegos' => [
            new Producto("Juego A", 59.99, "Descripción del Juego A", [
                new Comentario("Usuario41", "Increíble experiencia."),
                new Comentario("Usuario42", "Divertido y emocionante.")
            ]),
            new Producto("Juego B", 69.99, "Descripción del Juego B", [
                new Comentario("Usuario43", "Adictivo."),
                new Comentario("Usuario44", "No puedo dejar de jugar.")
            ]),
            new Producto("Juego C", 79.99, "Descripción del Juego C", [
                new Comentario("Usuario45", "Gráficos espectaculares."),
                new Comentario("Usuario46", "Me encanta la historia.")
            ]),
            new Producto("Juego D", 49.99, "Descripción del Juego D", [
                new Comentario("Usuario47", "Muy divertido."),
                new Comentario("Usuario48", "Recomendado para amigos.")
            ]),
            new Producto("Juego E", 39.99, "Descripción del Juego E", [
                new Comentario("Usuario49", "Perfecto para jugar en grupo."),
                new Comentario("Usuario50", "Diversión asegurada.")
            ]),
            new Producto("Juego F", 89.99, "Descripción del Juego F", [
                new Comentario("Usuario51", "Una joya."),
                new Comentario("Usuario52", "Me gusta mucho.")
            ]),
            new Producto("Juego G", 29.99, "Descripción del Juego G", [
                new Comentario("Usuario53", "Gran opción para el precio."),
                new Comentario("Usuario54", "Ideal para niños.")
            ]),
            new Producto("Juego H", 19.99, "Descripción del Juego H", [
                new Comentario("Usuario55", "Entretenido."),
                new Comentario("Usuario56", "Lo disfruto mucho.")
            ]),
            new Producto("Juego I", 99.99, "Descripción del Juego I", [
                new Comentario("Usuario57", "Espectacular."),
                new Comentario("Usuario58", "Me encanta jugarlo.")
            ]),
            new Producto("Juego J", 59.99, "Descripción del Juego J", [
                new Comentario("Usuario59", "Sin duda, uno de mis favoritos."),
                new Comentario("Usuario60", "Gran juego.")
            ]),
        ],
    ];

    return isset($productos[$id]) ? $productos[$id] : [];
}
