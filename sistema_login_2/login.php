<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1,h2 {
            text-align: center;
            color: rgb(36, 102, 104);
        }
        body{
            background-color: aquamarine;
        }

        table {
            width: 25%;
            background-color: rgb(11, 234, 241);
            border: 2px solid rgb(255, 255, 255);
            margin: auto;
        }

        .izq {
            text-align: right;
        }

        .der {
            text-align: left;
        }

        td {
            text-align: center;
            padding: 10px;
        }
    </style>

</head>

<body>
<?php

if (isset($_POST["enviar"])) {

    try {
        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM datospersonales WHERE nombre= :login AND contra= :password";
        $resultado = $base->prepare($sql);
        $login = htmlentities(addslashes($_POST["login"]));
        $password = htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login", $login);
        $resultado->bindValue(":password", $password);
        $resultado->execute();
        $numero_registro = $resultado->rowCount();
        if ($numero_registro != 0) {
            session_start();
            $_SESSION["usuario"] = $_POST["login"];
        } else {
            echo "Error. Usuario o contraseña incorrectos";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
?>

<?php
if (!isset($_SESSION["usuario"])) {
    include "formulario.html";  
} else {
    echo "Usuario: " . $_SESSION["usuario"];
};
?>


    <h2>CONTENIDO DE LA WEB</h2>
    <table width="800" border="0">
<tr>
<td> <img src="imagenes/1.jpg" width="300" height="166"> </td>
<td> <img src="imagenes/2.jpg" width="300" height="171"> </td>
</tr>
<tr>
<td> <img src="imagenes/3.jpg" width="300" height="166"> </td>
<td> <img src="imagenes/4.jpg" width="300" height="171"> </td>
</tr>
    </table>

</body>

</html>
