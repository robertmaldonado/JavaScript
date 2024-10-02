<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
</head>

<body>
    <div class="container py-4">

        <h2>regiustra alumnos</h2>


        <form action="{{ url('alumnos') }}" method="post">


            <div class="mb-3 row">
                <label for="matricula" class="col-sm-2 col-form-label">Matricula</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="matricula" id="matricula" value="1">
                </div>
                
            </div>

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">nombre commplrto</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="matricula" id="nombre" value="2" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">nombre commplrto</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="matricula" id="nombre" value="2" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">nombre commplrto</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="matricula" id="nombre" value="2" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">fecha de nacimiento</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="matricula" id="fecha" value="3" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">telefono:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="telefono" id="telefono" value="4" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="email" id="email" value="alo">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nivel" class="col-sm-2 col-form-label">nivel:</label>
                <div class="col-sm-5">

                    <select name="nivel" id="nivel" class="form-select" required>

                        <option value="dos">selecionar nivel</option>


                        <option value="uno">aa</option>


                    </select>

                </div>
            </div>

            <a href="{{ url('alumnos') }}" class="btn btn-secondary">regresar</a>
            <button type="submit" class="btn btn-success">guardar</button>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>