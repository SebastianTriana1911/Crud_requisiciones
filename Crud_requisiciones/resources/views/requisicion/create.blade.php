<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Requisiciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h1>Formulario de Requisiciones</h1>

    <form action="{{ route('requisicion.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="descripcion_cargo" class="form-label"><strong>Descripción del cargo</strong></label>
            <input type="text" class="form-control" id="descripcion_cargo" name="descripcion_cargo" value="{{ old('descripcion_cargo') }}">
        </div>

        <div class="mb-3">
            <label for="justificacion" class="form-label"><strong>Justificación</strong></label>
            <input type="text" class="form-control" id="justificacion" name="justificacion" value="{{ old('justificacion') }}">
        </div>

        <div class="mb-3">
            <label for="candidato_ideal" class="form-label"><strong>Candidato ideal</strong></label>
            <input type="text" class="form-control" id="candidato_ideal" name="candidato_ideal" value="{{ old('candidato_ideal') }}">
        </div>

        <div class="mb-3">
            <label for="mision_cargo" class="form-label"><strong>Misión del cargo</strong></label>
            <input type="text" class="form-control" id="mision_cargo" name="mision_cargo" value="{{ old('mision_cargo') }}">
        </div>

        <div class="mb-3">
            <label for="responsabilidades" class="form-label"><strong>Responsabilidades</strong></label>
            <input type="text" class="form-control" id="responsabilidades" name="responsabilidades" value="{{ old('responsabilidades') }}">
        </div>

        <div class="mb-3">
            <label for="descripcion_candidato" class="form-label"><strong>Descripción del candidato</strong></label>
            <input type="text" class="form-control" id="descripcion_candidato" name="descripcion_candidato" value="{{ old('descripcion_candidato') }}">
        </div>

        <div class="mb-3">
            <label for="talentos_candidato" class="form-label"><strong>Talentos del candidato</strong></label>
            <input type="text" class="form-control" id="talentos_candidato" name="talentos_candidato" value="{{ old('talentos_candidato') }}">
        </div>
        
        <div class="mb-3">
            <label for="criterios_seleccion" class="form-label"><strong>Criterios de selección</strong></label>
            <input type="text" class="form-control" id="criterios_seleccion" name="criterios_seleccion" value="{{ old('criterios_seleccion') }}">
        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Enviar">
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
