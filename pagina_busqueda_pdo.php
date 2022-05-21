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
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
try {
    $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $sql = "SELECT nif, nombre, apellido, edad FROM datospersonales WHERE nombre = :name AND apellido = :apel";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":name" => $nombre, ":apel" => $apellido));
    while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo "Nif: " . $registro['nif'] . "Nombre: " . $registro['nombre'] . "Apellido: " . $registro['apellido'] . "Edad: " . $registro['edad'];
    }
    $resultado->closeCursor();
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
} finally {
    $base = null;
}
?>
</body>
</html>