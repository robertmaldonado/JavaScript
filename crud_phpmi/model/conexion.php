<?php


$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "crud";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");


// si funciona
//**************************************** */
/* $contrasena = "";
$usuario = "root";
$nombre_bd = "crud";

try {
    $bd = new PDO(
        'mysql:host=localhost;
		dbname=' . $nombre_bd,
        $usuario,
        $contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (Exception $e) {
    echo "Problema con la conexion: " . $e->getMessage();
} */

//*********************************** */



/* <?php

$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "crud_php";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

?> */