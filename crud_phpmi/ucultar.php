<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botones y Select</title>
</head>

<body>

    <!-- Botones -->
    <button onclick="mostrarSelect()">Mostrar Select</button>
    <button onclick="ocultarSelect()">Ocultar Select</button>

    <!-- Select oculto inicialmente -->
    <select id="miSelect" style="display: none;">
        <option value="1">Item 1</option>
        <option value="2">Item 2</option>
    </select>

    <script>
        // Función para mostrar el select
        function mostrarSelect() {
            document.getElementById("miSelect").style.display = "block";
        }

        // Función para ocultar el select
        function ocultarSelect() {
            document.getElementById("miSelect").style.display = "none";
        }
    </script>

</body>

</html>