<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
.resaltar{
    color: #f00;
    font-weight: bold;
}
</style>
</head>
<body>

    <?php
echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";

$variable1 = "Casa";
$variable2 = "CASA";

$resultado = strcmp($variable1, $variable2);
$resultado1 = strcasecmp($variable1, $variable2);

echo "El resultado es $resultado <br>";
echo "El resultado es $resultado1 <br>";

if ($resultado) {
    echo "No coinciden";
} else {
    echo "Si coinciden";
}

?>

</body>
</html>