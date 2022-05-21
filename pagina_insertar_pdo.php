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
$cnif = $_POST["c_nif"];
$nombre = $_POST["name"];
$apellido = $_POST["apel"];
$age = $_POST["age"];
$contra = $_POST["contra"];
$pais = $_POST["pais"];
try {
    $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $sql = "INSERT INTO datospersonales (nif, nombre, apellido, edad, contra, país)
    VALUES (:cnif, :nombre, :apellido, :edad, :contra, :pais)";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":cnif" => $cnif, ":nombre" => $nombre, ":apellido" => $apellido, ":edad" => $age, ":contra" => $contra, ":pais" => $pais));
    
    echo "Registro insertado";
    
    $resultado->closeCursor();
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
} finally {
    $base = null;
}
?>
</body>
</html>