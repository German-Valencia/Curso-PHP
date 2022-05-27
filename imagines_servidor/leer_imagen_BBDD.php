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
require "datos_conexion.php";

$conexion = @mysqli_connect($db_host, $db_usuario, $db_password);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("no se encuentra la BD");

mysqli_set_charset($conexion, "utf8");

$consulta="SELECT foto FROM datos_usuarios WHERE id = 1";
$resultado=mysqli_query($conexion, $consulta);
while ($fila = mysqli_fetch_array($resultado)) {
    $ruta_img = $fila['foto'];
}
?>
<div>
    <img src="/intranet/uploads/<?php echo $ruta_img; ?>" alt="Imagen del primer artículo"/> 
</div>
</body>
</html>