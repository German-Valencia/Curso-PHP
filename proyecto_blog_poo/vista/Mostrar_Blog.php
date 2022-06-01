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
    include "../modelo/Manejo_Objetos.php";
    try {
        $miconexion = new PDO("mysql:host=localhost;dbname=bbddblog", "root", "");
        $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $miconexion->exec("SET CHARACTER SET UTF8");
        $Manejo_Objetos = new Manejo_Objetos($miconexion);
        $tabla_blog = $Manejo_Objetos->getContenidoPOrFecha();
        if (empty($tabla_blog)) {
            echo "No hay ningun blog";
        } else {
            foreach ($tabla_blog as $blog) {
                echo "<h3>" . $blog->getTitulo() . "</h3>";
                echo "<h4>" . $blog->getFecha() . "</h4>";
                echo "<div style='width:400px'>" . $blog->getComentario() . "</div>";
                if ($blog->getImagen() != "") {
                    echo "<img src='../imagenes/" . $blog->getImagen() . "' width='300px' height='200px'>";
                }
                echo "<hr>";
            }
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }

    ?>
    <br>
    <a href="Formulario.php">Volver a la pagina de inserción</a>

</body>

</html>