<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Requisición</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h1>Estos son los datos de la requisición "{{ $requisicion->descripcion_cargo }}"</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $requisicion->id }}
    </div>
    <div class="mb-3">
        <strong>DESCRIPCION DEL CARGO:</strong> {{ $requisicion->descripcion_cargo }}
    </div>
    <div class="mb-3">
        <strong>JUSTIFICACION:</strong> {{ $requisicion->justificacion }}
    </div>
    <div class="mb-3">
        <strong>CANDIDATO IDEAL:</strong> {{ $requisicion->candidato_ideal }}
    </div>
    <div class="mb-3">
        <strong>MISION DEL CARGO:</strong> {{ $requisicion->mision_cargo }}
    </div>
    <div class="mb-3">
        <strong>RESPONSABILIDADES:</strong> {{ $requisicion->responsabilidades }}
    </div>
    <div class="mb-3">
        <strong>DESCRIPCION DEL CANDIDATO:</strong> {{ $requisicion->descripcion_candidato }}
    </div>
    <div class="mb-3">
        <strong>TALENTOS DEL CANDIDATO:</strong> {{ $requisicion->talentos_candidato }}
    </div>
    <div class="mb-3">
        <strong>CRITERIOS DE SELECCION:</strong> {{ $requisicion->criterios_seleccion }}
    </div>
    
    <a href="{{ route('requisicion.edit', $requisicion->id) }}" class="btn btn-primary">Actualizar</a>
    <a href="{{ route('requisicion.index') }}" class="btn btn-secondary">Atrás</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
