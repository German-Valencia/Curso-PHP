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
try {
    $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM datospersonales WHERE nombre= :login AND contra= :password";
    $resultado = $base->prepare($sql);
    $login = htmlentities(addslashes($_POST["login"]));
    $password = htmlentities(addslashes($_POST["password"]));
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);
    $resultado->execute();
    $numero_registro = $resultado->rowCount();
    if ($numero_registro != 0) {
        echo "<h2>Adelante</h2>";
    } else {
        header("location:login.php");
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
</body>
</html>