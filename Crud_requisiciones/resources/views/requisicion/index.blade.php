<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h1 class="display-4">Estas son todas las requisiciones</h1>
        <ul class="list-group">
            @foreach ($requisicion as $requi)
            <li class="list-group-item">
                <a href="{{ route('requisicion.show', $requi->id) }}">{{ $requi->descripcion_cargo }}</a>
            </li>
            @endforeach
        </ul>

        <a href="{{ route('requisicion.create') }}" class="btn btn-primary mt-3">Crear nueva requisición</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
