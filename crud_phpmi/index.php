<?php include 'template/header.php' ?>
<?php

include_once "model/conexion.php";
//$sentencia = $bd->query("select * from persona");
//$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
////print_r($persona);
//$sql = "SELECT * FROM users";
$sentencia   = ("SELECT * FROM persona");
$queryAlumnos = mysqli_query($con, $sentencia);
//$persona = mysqli_fetch_all($personax, MYSQLI_ASSOC);
//$dataAlumno = mysqli_fetch_array($personax);
//print_r($personax);
mysqli_close($con);

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Rellena todos los campos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>


            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Registrado!</strong> Se agregaron los datos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>



            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Vuelve a intentar.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>



            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Cambiado!</strong> Los datos fueron actualizados.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>


            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Eliminado!</strong> Los datos fueron borrados.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>
            <!-- fin alerta -->









            <div class="card">
                <div class="card-header">
                    Lista de personas
                </div>
                <div class="p-4">

                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">N</th>
                                    <th scope="col">codigo</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Signo</th>
                                    <th scope="col" colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $cantidad = 0;
                                while ($dataAlumno = mysqli_fetch_array($queryAlumnos)) {
                                    $cantidad++;
                                ?>

                                    <tr>
                                        <td scope="row"><?php echo  $cantidad; ?></td>
                                        <td scope="row"><?php echo $dataAlumno['codigo']; ?></td>
                                        <td><?php echo $dataAlumno['nombre']; ?></td>
                                        <td><?php echo $dataAlumno['edad']; ?></td>
                                        <td><?php echo $dataAlumno['signo']; ?></td>
                                        <td>
                                            <a class="text-success" href="editar.php?codigo=<?php echo $dataAlumno['codigo']; ?>">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        </td>
                                        <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?codigo=<?php echo $dataAlumno['codigo']; ?>"><i class="bi bi-trash"></i></a></td>
                                    </tr>

                                <?php

                                }
                                ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>

                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre"  value="martin" readonly autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Signo: </label>
                        <input type="text" class="form-control" name="txtSigno" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>