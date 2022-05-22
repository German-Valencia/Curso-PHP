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
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
}
?>
    <h1>Bienvenido Usuario Pag. 3 </h1>
    <?php
echo "Usuario: " . $_SESSION["usuario"] . "<br><br>"
?>
    <p>Esto es información sólo para usuarios registrados</p>
    <a href="usuarios_registrados1.php">Ir página 1</a><br><br>
   <a href="usuarios_registrados2.php">Ir página 2</a><br><br>
   <a href="usuarios_registrados4.php">Ir página 4</a><br><br>
   <a href="cierre.php">Cerrar sesión</a>
</body>
</html>