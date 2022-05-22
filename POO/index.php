<?php
require 'Devuelve_Productos.php';

$nombre=$_GET["buscar"];

$productos = new DevuelveProductos();
$array_productos = $productos->get_productos($nombre);
?>

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
foreach($array_productos as $elemento){
    echo "<table><tr><td>";
    echo $elemento['nif'] . "</td><td>";
    echo $elemento['nombre'] . "</td><td>";
    echo $elemento['apellido'] . "</td><td>";
    echo $elemento['edad'] . "</td><td>";
    echo $elemento['contra'] . "</td><td>";
    echo $elemento['país'] . "</td><td></tr></table>";
    echo "<br>";
    echo "<br>";
};
?>
</body>
</html>
