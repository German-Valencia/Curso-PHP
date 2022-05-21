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

try {
    $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $sql = "DELETE FROM datospersonales WHERE nif = :cnif";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":cnif" => $cnif));
    
    echo "Registro borrado";
    
    $resultado->closeCursor();
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
} finally {
    $base = null;
}
?>
</body>
</html>