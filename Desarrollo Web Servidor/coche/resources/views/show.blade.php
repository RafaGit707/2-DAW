<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Coches</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
<div>
    <h1>Detalles del Coche</h1>

    <div class="container">
        <div class="card">
            <h5 class="card-title"><strong>Marca:</strong> {{ $coche->marca }}</h5>
            <p class="card-text"><strong>Modelo:</strong> {{ $coche->modelo }}</p>
        </div>
        <a class="btn btn-secondary" href="{{ route('coches.index') }}">Volver al Listado</a>
        <a  class="btn btn-primary" href="{{ route('coches.edit', $coche->id) }}">Editar</a>
        <form class="d-inline" action="{{ route('coches.destroy', $coche->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este coche?')">Eliminar</button>
        </form>
    </div>
</div>

</body>
</html>

