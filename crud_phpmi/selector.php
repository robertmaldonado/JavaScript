<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Select</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="form-group">
            <label for="primarySelect">Seleccionar:</label>
            <select class="form-control" id="primarySelect" onchange="showSecondarySelect()">
                <option value="color">Color</option>
                <option value="estatura">Estatura</option>
            </select>
        </div>
        <div class="form-group" id="secondarySelectContainer" style="display:none;">
            <label for="secondarySelect">Seleccionar:</label>
            <select class="form-control" id="secondarySelect">
                <!-- Este select se llenará dinámicamente según la selección del usuario -->
            </select>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function showSecondarySelect() {
            var primarySelect = document.getElementById("primarySelect");
            var secondarySelectContainer = document.getElementById("secondarySelectContainer");
            var secondarySelect = document.getElementById("secondarySelect");
            var selectedOption = primarySelect.options[primarySelect.selectedIndex].value;

            // Limpiar opciones anteriores
            secondarySelect.innerHTML = "";

            if (selectedOption === "color") {
                // Mostrar select para elegir color
                secondarySelectContainer.style.display = "block";
                // Agregar opciones de color
                var option1 = document.createElement("option");
                option1.text = "Rojo";
                secondarySelect.add(option1);
                var option2 = document.createElement("option");
                option2.text = "Negro";
                secondarySelect.add(option2);
            } else if (selectedOption === "estatura") {
                // Mostrar select para elegir estatura
                secondarySelectContainer.style.display = "block";
                // Agregar opciones de estatura
                var option1 = document.createElement("option");
                option1.text = "Alto";
                secondarySelect.add(option1);
                var option2 = document.createElement("option");
                option2.text = "Bajo";
                secondarySelect.add(option2);
            } else {
                // Ocultar el select secundario si no se selecciona nada
                secondarySelectContainer.style.display = "none";
            }
        }
    </script>
</body>

</html>