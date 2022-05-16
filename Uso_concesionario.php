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

include "Concesionario.php";

// Compra_vehiculo::$ayuda=10000; se accede a la variable estatica por no estar privada

Compra_vehiculo::descuento_gobierno(); //para activar  o desactivar la ayuda

$compra_Antonio = new Compra_vehiculo("compacto");

$compra_Antonio->climatizador();

$compra_Antonio->tapiceria_cuero("blanco");

echo $compra_Antonio->precio_final() . "<br>";

$compra_Ana = new Compra_vehiculo("compacto");

$compra_Ana->climatizador();

$compra_Ana->tapiceria_cuero("rojo");

echo $compra_Ana->precio_final();

?>
</body>
</html>