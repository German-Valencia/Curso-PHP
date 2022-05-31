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
    $miconexion = mysqli_connect("localhost", "root", "", "bbddblog");
    if (!$miconexion) {
        echo "Error al conectar con la base de datos" . mysqli_connect_error();
        exit();
    }
    if ($_FILES["imagen"]["error"]) {
        switch ($_FILES["imagen"]["error"]) {
            case 1:
                echo "El tamaño del archivo excede lo permitido por el servidor";
                break;
            case 2:
                echo "El tamaño del archivo excede 2 MB";
                break;
            case 3:
                echo "El envio del archivo se interrumpio";
                break;
            case 4:
                echo "No se ha enviado ningun archivo";
                break;
            case 6:
                echo "Falta una carpeta temporal";
                break;

            default:
                echo "Error desconocido";
                break;
        }
    } else {
        echo "Todo correcto<br>";
        if (isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK)) {
            $destino_ruta = "imagenes/";
            move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);
            echo "El archivo " . $_FILES["imagen"]["name"] . " se ha copiado en el directorio de imagenes";
        } else {
            echo "No se ha podido copiar el archivo en el directorio de imagenes";
        }
    }

    $eltitulo = $_POST["campo_titulo"];
    $lafecha = date("Y-m-d H:i:s");
    $elcomentario = $_POST["area_comentarios"];
    $laimagen = $_FILES["imagen"]["name"];

    $miconsulta = "INSERT INTO contenido (TITULO,FECHA, COMENTARIO, IMAGEN) VALUES ('" . $eltitulo . "','" . $lafecha . "','" . $elcomentario . "','" . $laimagen . "')";

    $resultado = mysqli_query($miconexion, $miconsulta);

    mysqli_close($miconexion);

    echo "<br> se ha agregado la entrada con éxito <br><br>";
    ?>
    <a href="Formulario.php">Añadir nueva entrada</a> <br><br>
    <a href="Mostrar_Blog.php">Ver Blog</a>
</body>

</html>