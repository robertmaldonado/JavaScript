<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Selects</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <form action="procesar_datos.php" method="POST">
                    <p>Seleccione una opción en el primer select para controlar la visibilidad del tercer select:</p>
                    <select id="select1" class="form-select mb-3" name="select1" onchange="mostrarOcultarSelect(this)">
                        <option value="0">Seleccione un elemento</option>
                        <option value="1">Item 1</option>
                        <option value="2">Item 2</option>
                        <option value="3">Item 3</option>
                        <option value="4">Item 4</option>
                        <option value="5">Item 5</option>
                    </select>
                    <select id="select2" class="form-select mb-3" name="select2">
                        <option value="0">Seleccione un elemento</option>
                        <option value="1">Elemento 1</option>
                        <option value="2">Elemento 2</option>
                        <option value="3">Elemento 3</option>
                        <option value="4">Elemento 4</option>
                        <option value="5">Elemento 5</option>
                    </select>
                    <select id="select3" class="form-select mb-3" name="select3">
                        <option value="0">Seleccione un elemento</option>
                        <option value="1">Elemento 1</option>
                        <option value="2">Elemento 2</option>
                        <option value="3">Elemento 3</option>
                        <option value="4">Elemento 4</option>
                        <option value="5">Elemento 5</option>
                    </select>
                    <select id="select4" class="form-select mb-3" name="select4">
                        <option value="0">Seleccione un elemento</option>
                        <option value="1">Elemento 1</option>
                        <option value="2">Elemento 2</option>
                        <option value="3">Elemento 3</option>
                        <option value="4">Elemento 4</option>
                        <option value="5">Elemento 5</option>
                    </select>
                    <select id="select5" class="form-select mb-3" name="select5">
                        <option value="0">Seleccione un elemento</option>
                        <option value="1">Elemento 1</option>
                        <option value="2">Elemento 2</option>
                        <option value="3">Elemento 3</option>
                        <option value="4">Elemento 4</option>
                        <option value="5">Elemento 5</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function mostrarOcultarSelect(select) {
            var valorSeleccionado = select.value;
            if (valorSeleccionado === '1') {
                document.getElementById('select3').style.display = 'none';
            } else {
                document.getElementById('select3').style.display = 'block';
            }
        }
    </script>
</body>

</html>