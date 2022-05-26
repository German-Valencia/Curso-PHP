<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    td{
        border: 1px solid black;
    }
</style>

</head>
<body>
    <table>
        <tr>
            <td>NOMBRE VOTANTE</td>
        </tr>
    <?php
foreach ($matrizProductos as $registro) {
    echo "<tr><td>" . $registro['NOMBRE'] . "</td></tr>";  
}
?>
</table>
</body>
</html>