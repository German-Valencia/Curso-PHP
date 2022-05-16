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
include "vehiculos.php";

$mazda = new Coche();

$pegaso = new Camion();


echo "El mazda tiene " . $mazda->get_ruedas() . " ruedas <br>";
echo "El pegaso tiene " . $pegaso->get_ruedas() . " ruedas <br>";
echo "El mazda tiene motor de " . $mazda->get_motor() . " cc <br>";
echo "El pegaso tiene motor de " . $pegaso->get_motor() . " cc <br>";
$pegaso->girar();
echo $pegaso->color . "<br>";
$pegaso->frenar();
$pegaso->set_color("azul", "pegaso");
$pegaso->arrancar();
?>
</body>
</html>