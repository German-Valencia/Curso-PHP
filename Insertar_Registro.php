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

$consulta = "INSERT INTO datospersonales (nif, nombre, apellido, edad) values ('$codnif', '$name', '$apel', $age)";

$resultados = mysqli_query($conexion, $consulta);

if ($resultados == false) {
    echo "Error en la consulta";
} else {
    echo "Registro guardado:<br><br>";
    echo "<table><tr><td>Codigo NIF: $codnif</td></tr>";
    echo "<tr><td>Nombre: $name</td></tr>";
    echo "<tt><td>Apellido: $apel</td></tr>";
    echo "<tr><td>Edad: $age</td></tr></table>";
}

mysqli_close($conexion);

?>



</body>
</html>