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
for ($i = 0; $i <= 10; $i++) {

    echo "9 x $i = " . 9 * $i . "<br>";

    /*   echo "<p> Hemos entrado en el bucle $i</p>";
if($i===6){
echo "interrumpi";
break;
} */

}
echo "Hemos salido del bucle <br>";

for ($i = 10; $i >= -10; $i--) {

    if ($i === 0) {
        echo "División por cero no es posible <br>";
        continue;
    }

    echo "9 / $i = " . 9 / $i . "<br>";
}
?>
</body>
</html>