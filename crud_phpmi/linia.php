<?php include 'template/header.php' ?>



<div class="container py-5">

    <h2>regiustra alumnos</h2>


    <form action="{{ url('alumnos') }}" method="post">


        <div class="mb-4 row">
            <label for="matricula" class="col-sm-2 col-form-label">Matricula</label>
            <div class="col-sm-8">
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

<?php include 'template/footer.php' ?>