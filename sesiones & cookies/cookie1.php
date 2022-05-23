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
setcookie("prueba", "Esta es la información de nuestra primera cookie", time()+30, "/sesiones%20&%20cookies/zona_contenidos/");
echo "Cookie creada con éxito"
?>
</body>
</html>