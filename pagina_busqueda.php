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

$busqueda = $_GET["buscar"];

require "datos_conexion.php";

$conexion = @mysqli_connect($db_host, $db_usuario, $db_password);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("no se encuentra la BD");

mysqli_set_charset($conexion, "utf8");

//$consulta = "select * from lideres where telefono LIKE '%$busqueda%'";
$consulta = "select * from lideres where nombre = '$busqueda'";
echo "$consulta <br><br>";

$resultados = mysqli_query($conexion, $consulta);

while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
    echo "<table width='90%' align='center' border='2'><tr><td width='100px'>";
    echo $fila["CEDULA"] . "</td><td width='100px'>";
    echo $fila["VINCULO"] . "</td><td width='100px'>";
    echo $fila["CONTACTADO"] . "</td><td width='100px'>";
    echo $fila["NOMBRE"] . "</td><td width='100px'>";
    echo $fila["APELLIDO"] . "</td><td width='100px'>";
    echo $fila["DIRECCION"] . "</td><td width='100px'>";
    echo $fila["TELEFONO"] . "</td><td width='100px'>";
    echo $fila["BARRIO"] . "</td><td width='100px'>";
    echo $fila["MUNICIPIO"] . "</td><td width='20px'>";
    echo $fila["VOTACION"] . "</td></tr></table>";
}

mysqli_close($conexion);

?>
</body>
</html>