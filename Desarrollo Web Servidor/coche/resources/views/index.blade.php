<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<h1>Lista de Coches</h1>
    <a href="{{ route('coches.create') }}">Crear Nuevo Coche</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coches as $coche)
                <tr>
                    <td><a href="{{ route('coches.show', $coche->id) }}">{{ $coche->id }}</a></td>
                    <td>{{ $coche->marca }}</td>
                    <td>{{ $coche->modelo }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('coches.edit', $coche->id) }}">Editar</a>
                        <form action="{{ route('coches.destroy', $coche->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

