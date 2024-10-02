<?php
print_r($_POST);
if (empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtSigno"])) {
    header('Location: index.php?mensaje=falta');
    exit();
}





include_once 'model/conexion.php';
$nombre = $_POST["txtNombre"];
$edad = $_POST["txtEdad"];
$signo = $_POST["txtSigno"];



//$sql = "INSERT INTO persona VALUES('$nombre','$edad','$signo')";
// Consulta SQL para insertar los datos en la tabla persona
$sql = "INSERT INTO persona (nombre, edad, signo) VALUES ('$nombre', '$edad', '$signo')";
$query = mysqli_query($con, $sql);

if ($query) {
    mysqli_close($con);
    Header("Location: index.php");
} else {
}
