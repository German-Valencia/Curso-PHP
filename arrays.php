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
//array indexado
/* $semana[] = "Lunes";
$semana[] = "Martes";
$semana[] = "Miércoles"; */
$semana = array("Jueves", "Viernes", "Sábado", "Domingo");
echo $semana[3] . "<br>";
//agregar un elemento al array indexado
$semana[] = "Lunes";
//array asociativo
$datos = array("Nombre" => "Juan", "Apellido" => "Gómez", "Edad" => 21);
echo $datos["Apellido"] . "<br>";
//agregar un elemento al array asociativo
$datos["País"] = "España";

//comprobar si una variable es un array
if (is_array($datos)) {
    echo "Es un array" . "<br>";
} else {
    echo "No es un array" . "<br>";
}
echo is_array($datos) . "<br>";

//como recorrer un array indexado
for ($i = 0; $i < count($semana); $i++) {
    echo $semana[$i] . "<br>";

}
;

//como recorrer lo elementos de un array asociativo
foreach ($datos as $clave => $valor) {
    echo "A $clave le corresponde = $valor. <br>";
}
;

//ordenar los elementos dentro de un array
sort($semana);
for ($i = 0; $i < count($semana); $i++) {
    echo $semana[$i] . "<br>";
}

//------------------ARRAYS MULTIDIMENSIONALES---------------------
$alimentos = array(
    "fruta" => array("tropical" => "kiwi",
        "cítrico" => "mandarina",
        "otros" => "manzana"),
    "leche" => array("animal" => "vaca",
        "vegetal" => "coco"),
    "carne" => array("vacuno" => "lomo",
        "porcino" => "pata"),
);
//acceder a un elemento
echo $alimentos["carne"]["vacuno"] . "<br><br><br><br>";

//recorrer el array
foreach ($alimentos as $key_alim => $alim) {
    echo "$key_alim: <br>";
    foreach ($alim as $clave => $valor) {
        echo "$clave=$valor <br>";
    }
    echo "<br>";
}
//más fácil de recorrer el array
echo var_dump($alimentos) . "<br><br><br><br><br><br>";
echo print_r($alimentos);
?>
</body>
</html>