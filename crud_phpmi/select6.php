<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de Color o Estatura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container py-4">
        <h2>Selección de Color o Estatura</h2>

        <!-- Primer select -->
        <div class="mb-3">
            <label for="select1" class="form-label">Seleccione una opción:</label>
            <select id="select1" class="form-select" onchange="mostrarOpciones()">
                <!-- <option value="" disabled selected>Seleccione una opción</option> -->
                <option value="color">ninguno</option>
                <option value="color">Color</option>
                <option value="estatura">Estatura</option>
            </select>
        </div>

        <!-- Segundo select -->
        <div class="mb-3">
            <label for="select2" class="form-label">Seleccione una opción:</label>
            <select id="select2" class="form-select">
                <option value="">Seleccione una opción</option>
            </select>
        </div>

    </div>

    <script>
        function mostrarOpciones() {
            var select1 = document.getElementById("select1");
            var select2 = document.getElementById("select2");

            // Limpiar select2
            select2.innerHTML = '<option value="">Seleccione una opción</option>';

            // Determinar qué opciones mostrar en select2 según la selección en select1
            if (select1.value === "color") {
                var opciones = ['Rojo', 'Azul', 'Verde']; // Opciones para el color
            } else if (select1.value === "estatura") {
                var opciones = ['Alto', 'Medio', 'Bajo']; // Opciones para la estatura
            }

            // Agregar las opciones al select2
            opciones.forEach(function(opcion) {
                var option = document.createElement('option');
                option.value = opcion;
                option.text = opcion;
                select2.add(option);
            });
        }
    </script>

</body>

</html>