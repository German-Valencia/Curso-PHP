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

$cnif = $_GET["c_nif"];
$nombre = $_GET["name"];
$apellido = $_GET["apel"];
$edad = $_GET["age"];
$contra = $_GET["contra"];
$pais = $_GET["pais"];

require "datos_conexion.php";

$conexion = @mysqli_connect($db_host, $db_usuario, $db_password);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("no se encuentra la BD");

mysqli_set_charset($conexion, "utf8");

//1. la instruccion sql con el ?
$sql = "INSERT INTO datospersonales (nif, nombre, apellido, edad, contra, país) VALUES (?,?,?,?,?,?)";

//2. preparar la consulta con la función mysqli_prepare(). esta funcion requiere dos parámetros: el objeto conexión y la sentencia sql
$resultado = mysqli_prepare($conexion, $sql);

//3. Unir parámentros a la sentencia sql con la función mysqli_stmt_bind_param(), devuelve true o fqalse, requiere tres parámetros: el objeto mysqli_stmt(devuelto por mysqli_prepare), el tipo de datos que se utilizará como criterior en sql, la variable con el criterio "s" para string, "i" numérico, "d" decimal
$ok = mysqli_stmt_bind_param($resultado, "sssiss", $cnif, $nombre, $apellido, $edad, $contra, $pais);

//4. Ejecutar la consulta con la función mysqli_stmt_execute(), devuelve boleano, parámetros el objeto mysqli_stmt
$ok = mysqli_stmt_execute($resultado);
if ($ok == false) {
    echo "Error al ejecutar la consulta";
} else {
//5. Asociar variables al resulktado de la consulta con la función mysqli_stmt_bind_result(). devuelve boleano, parámetros el objeto mysqli_stmt y tantas variables como columnas en consulta sql.

//6. lectura de valores. función mysqli_stmt_fetch, parámentros el objeto mysqli_stmt
    echo "Agregado nuevo registro<br><br>";

    

    mysqli_stmt_close($resultado);
}

?>
</body>
</html>