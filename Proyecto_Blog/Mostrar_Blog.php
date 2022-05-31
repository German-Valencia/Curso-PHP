<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Blog</h2>
    <hr>
    <?php
      $miconexion = mysqli_connect("localhost", "root", "", "bbddblog");
      if (!$miconexion) {
          echo "Error al conectar con la base de datos" . mysqli_connect_error();
          exit();
      }
        $miconsulta = "SELECT * FROM contenido ORDER BY FECHA DESC";

        if ($resultado = mysqli_query($miconexion, $miconsulta)) {
            while ($registro = mysqli_fetch_assoc($resultado)) {
                echo "<h3>" . $registro['TITULO'] . "</h3>";
                echo "<h4>" . $registro['FECHA'] . "</h4>";
                echo "<div style='width:400px'>" . $registro['COMENTARIO'] . "</div><br><br>";
                if ($registro['IMAGEN'] != "") {                    
                    echo "<img src='imagenes/" . $registro['IMAGEN'] . "' width='350' height='200'>";
                }
                echo "<hr>";
            }
        }
        

    ?>
</body>
</html>