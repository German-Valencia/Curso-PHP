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

$Id = "";
$Nombre = "";
$Tipo = "";
$Contenido = "";

require "datos_conexion.php";

$conexion = @mysqli_connect($db_host, $db_usuario, $db_password);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("no se encuentra la BD");

mysqli_set_charset($conexion, "utf8");

$consulta = "SELECT * FROM archivos WHERE id = 1";
$resultado = mysqli_query($conexion, $consulta);
while ($fila = mysqli_fetch_array($resultado)) {
    $Id = $fila['Id'];
    $Nombre = $fila['Nombre'];
    $Tipo = $fila['Tipo'];
    $Contenido = $fila['Contenido'];
}
echo "Id: " . $Id . "<br>";
echo "Nombre: " . $Nombre . "<br>";
echo "Tipo: " . $Tipo . "<br>";
echo "Contenido: " . "<img src='data:imge/jpeg; base64," . base64_encode($Contenido) . "'>" . "<br>";
?>

</body>
</html>