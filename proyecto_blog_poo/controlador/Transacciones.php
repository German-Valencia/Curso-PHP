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

include_once "../modelo/Objeto_Blog.php";
include_once "../modelo/Manejo_Objetos.php";

try {
    $miconexion = new PDO("mysql:host=localhost;dbname=bbddblog", "root", "");
    $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $miconexion->exec("SET CHARACTER SET UTF8");

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
            $destino_ruta = "../imagenes/";
            move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);
            echo "El archivo " . $_FILES["imagen"]["name"] . " se ha copiado en el directorio de imagenes";
        } else {
            echo "No se ha podido copiar el archivo en el directorio de imagenes";
        }
    }
    $Manejo_Objetos = new Manejo_Objetos($miconexion);
    $blog = new Objeto_Blog();
    $blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
    $blog->setFecha(Date("Y-m-d H:i:s"));
    $blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
    $blog->setImagen($_FILES["imagen"]["name"]);

    $Manejo_Objetos->setContenido($blog);

    echo "<br> Entrada de blog agregada correctamente <br>";

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

?>
</body>
</html>



