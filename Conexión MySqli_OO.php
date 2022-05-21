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
//crear la conexion con los datos requeridos
$conexion = new mysqli("localhost", "root", "", "pruebas");

//si la conexion no tiene éxito
if ($conexion->connect_errno) {
    echo "Falló la conexión." . $conexion->connect_errno;
}

$conexion->set_charset("utf8");

$sql = "SELECT * FROM lideres";

//ejecutar la consulta
$resultados = $conexion->query($sql);

//si la consulta sql falla
if ($conexion->errno) {
    die($conexion->error);
}

//recorrer los resultados obtenidos
while ($fila = $resultados->fetch_assoc()) {
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

$conexion->close();

?>
</body>
</html>