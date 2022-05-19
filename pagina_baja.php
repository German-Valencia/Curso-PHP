<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    table{
        width: 95%;
        border: 1px dotted #FF0000;
        margin: auto;
    }
</style>

</head>
<body>
    <?php

require "datos_conexion.php";

$conexion = @mysqli_connect($db_host, $db_usuario, $db_password);

//mysqli_real_escape_string() evita que a las variables se le pasen caracteres especiales
$usuario = mysqli_real_escape_string($conexion, $_GET["usu"]);
$contra = mysqli_real_escape_string($conexion, $_GET["con"]);
//----------------------------------------------------------------------------------------

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("no se encuentra la BD");

mysqli_set_charset($conexion, "utf8");

//$consulta = "select * from lideres where telefono LIKE '%$busqueda%'";
$consulta = "delete from datospersonales where nombre = '$usuario' and contra = '$contra'";
echo "$consulta <br><br>";

mysqli_query($conexion, $consulta); //esto es para ejecutar la consulta

if (mysqli_affected_rows($conexion) > 0) {

    echo "Baja procesada.";
} else {
    echo "No se ha encontrado información.";
}

mysqli_close($conexion);

?>
</body>
</html>