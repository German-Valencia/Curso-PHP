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

//$busqueda = $_GET["buscar"]; con $_GET traemos los datos que el usuario escribio en el formulario

$codnif = $_GET["c_nif"];
$name = $_GET["name"];
$apel = $_GET["apel"];
$age = $_GET["age"];

require "datos_conexion.php";

$conexion = @mysqli_connect($db_host, $db_usuario, $db_password);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("no se encuentra la BD");

mysqli_set_charset($conexion, "utf8");

$consulta = "DELETE FROM datospersonales where nif = '$codnif'";

$resultados = mysqli_query($conexion, $consulta);

if ($resultados == false) {
    echo "Error en la consulta";
} else {
    /* echo "Registro eliminado";
    echo mysqli_affected_rows($conexion); */
    if (mysqli_affected_rows($conexion) == 0) {
        echo "No hay registros que eliminar con ese criterio.";
    } else {
        echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros";
    }
}

mysqli_close($conexion);

?>



</body>
</html>