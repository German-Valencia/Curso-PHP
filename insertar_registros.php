<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//$busqueda = $_GET["buscar"];

require "datos_conexion.php";

$conexion = @mysqli_connect($db_host, $db_usuario, $db_password);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("no se encuentra la BD");

mysqli_set_charset($conexion, "utf8");

$consulta = "INSERT INTO datospersonales (nif, nombre, apellido, edad) values ('94322595', 'Germán', 'Valencia', 46)";

$resultados = mysqli_query($conexion, $consulta);



mysqli_close($conexion);

?>
</body>
</html>