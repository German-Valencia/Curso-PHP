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
function incrementa(&$valor1)
{ //el argumento que recibe es por referencia debido al &
    $valor1++;
    return $valor1;
}
$numero = 5;
echo incrementa($numero) . "<br>";
echo $numero . "<br>";

function cambia_mayus(&$param)
{
    $param = strtolower($param);
    $param = ucwords($param);
    return $param;
}
$cadena = "hOlA mUnDo";
echo cambia_mayus($cadena) . "<br>";
echo $cadena;
?>
</body>
</html>