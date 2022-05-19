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

$consulta = "select * from datospersonales where nombre LIKE '%$busqueda%'";

$resultados = mysqli_query($conexion, $consulta);

while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
    echo "<form action='Actualizar.php' method='get'width='90%' align='center' border='2'><tr><td width='100px'>";
    echo "<input type='text' name='c_nif' value='" . $fila["nif"] . "'><br>";
    echo "<input type='text' name='name' value='" . $fila["nombre"] . "'><br>";
    echo "<input type='text' name='apel' value='" . $fila["apellido"] . "'><br>";
    echo "<input type='text' name='age' value='" . $fila["edad"] . "'><br>";
    echo "<input type='submit' name='enviando' value='Actualizar!'>";
    echo "</form>";
}

mysqli_close($conexion);

?>
</body>
</html>