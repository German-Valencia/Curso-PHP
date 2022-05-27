<?php
//Recibiendo los datos de la imagen
$nombre_archivo = $_FILES['archivo']['name'];
$tipo_archivo = $_FILES['archivo']['type'];
$tamano_archivo = $_FILES['archivo']['size'];

if ($tamano_archivo <= 1000000) {

    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';
    move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino . $nombre_archivo);
} else {
    echo "El tamaño es demasiado grande";
}

require "datos_conexion.php";

$conexion = @mysqli_connect($db_host, $db_usuario, $db_password);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("no se encuentra la BD");

mysqli_set_charset($conexion, "utf8");

$archivo_objetivo = fopen($carpeta_destino . $nombre_archivo, "r");

$contenido = fread($archivo_objetivo, $tamano_archivo);

$contenido=addslashes($contenido);

fclose($archivo_objetivo);

$sql = "INSERT INTO archivos (Id, Nombre, Tipo, Contenido) VALUES (0, '$nombre_archivo', '$tipo_archivo', '$contenido')";

$resultado = mysqli_query($conexion, $sql);

if (mysqli_affected_rows($conexion) > 0) {
    echo "El archivo se ha subido correctamente";
} else {
    echo "El archivo no se ha podido subir";
}
