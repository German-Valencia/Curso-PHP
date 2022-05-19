<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            color: #00F;
            border-bottom: dotted #0000FF;
            width: 50%;
            margin: auto;
        }
        table{
            border: 1px solid #F00;
            padding: 20px 50px;
            margin-top: 50px;
        }
        body{
            background-color: #FFC;
        }
    </style>
</head>
<body>
<h1>Borrado de Artículos</h1>
<form name="form1" method="get" action="Eliminar_Registro.php">
    <table border="0" align="center">
        <tr>
            <td>Código NIF:</td>
            <td>
                <label for="c_nif"></label>
                <input type="text" name="c_nif" id="c_nif"></td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td>
                <label for="name"></label>
                <input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td>Apellido:</td>
            <td>
                <label for="apel"></label>
                <input type="text" name="apel" id="apel"></td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td>
                <label for="age"></label>
                <input type="number" name="age" id="age"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="center"><input type="submit" name="eliminar" id="eliminar" value="Eliminar"></td>
            <td align="center"><input type="reset" name="delete" id="delete" value="Borrar"></td>
        </tr>
    </table>
</form>
</body>
</html>
