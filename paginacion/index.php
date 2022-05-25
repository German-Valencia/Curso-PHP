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
        $base->exec("SET CHARACTER SET utf8");
        $tam_pag = 4;
        if (isset($_GET["pagina"])) {
            if ($_GET["pagina"]==1) {
                header("location:index.php");
            } else {
                $pagina = $_GET["pagina"];
            }
        } else {
            $pagina = 1;
        }
        $empezar_desde = ($pagina - 1) * $tam_pag;
        $sql_total = "SELECT NOMBRE, APELLIDO, CEDULA, TELEFONO FROM lideres WHERE NOMBRE LIKE 'PAO%'";
        $resultado = $base->prepare($sql_total);
        $resultado->execute(array());
        $num_filas = $resultado->rowCount();
        $total_pag = ceil($num_filas / $tam_pag);
        echo "Número de registros de la consulta: " . $num_filas . "<br>";
        echo "Mostramos " . $tam_pag . " registros por página" . "<br>";
        echo "Mostrando la página " . $pagina . " de: " . $total_pag . "<br>";

        $resultado->closeCursor();
        $sql_limite = "SELECT NOMBRE, APELLIDO, CEDULA, TELEFONO FROM lideres WHERE NOMBRE LIKE 'PAO%' LIMIT $empezar_desde,$tam_pag";
        $resultado = $base->prepare($sql_limite);
        $resultado->execute(array());
        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "Nombre: " . $registro['NOMBRE'] . " Apellido: " . $registro['APELLIDO'] . " Cédula: " . $registro['CEDULA'] . " Teléfono: " . $registro['TELEFONO'] . "<br>";
        }
    } catch (Exception $e) {
        echo "Linea de error: " . $e->getLine();
    }
    //-----------------------PAGINACIÓN---------------------------
    for ($i = 1; $i <= $total_pag; $i++) {
        echo "<a href='?pagina=" . $i . "'> " . $i . "</a>  ";        
    }
     //-----------------------PAGINACIÓN---------------------------
    ?>
</body>

</html>