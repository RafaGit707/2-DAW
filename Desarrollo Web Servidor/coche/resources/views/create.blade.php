<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Coches</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div class="container">
    <h1 class="mb-4">Añadir Nuevo Coche</h1>

    <form action="{{ route('coches.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('coches.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>

</body>
</html>

