<?php
//Recibiendo los datos de la imagen
$nombre_imagen = $_FILES['imagen']['name'];
$tipo_imagen = $_FILES['imagen']['type'];
$tamano_imagen = $_FILES['imagen']['size'];
echo $_FILES['imagen']['size'] . "<br>";
echo $_FILES['imagen']['type'] . "<br>";
echo $_FILES['imagen']['name'] . "<br>";
if ($tamano_imagen <= 1000000 && ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif")) {
    //ruta de la carpeta destino en el server
    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';
    move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino . $nombre_imagen);
} else {
    echo "El tamaño es demasiado grande o no es un archivo de imagen";
}

require "datos_conexion.php";

$conexion = @mysqli_connect($db_host, $db_usuario, $db_password);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("no se encuentra la BD");

mysqli_set_charset($conexion, "utf8");

$sql = "UPDATE datos_usuarios SET foto =  '$nombre_imagen' WHERE id=1";

$resultado = mysqli_query($conexion, $sql);
