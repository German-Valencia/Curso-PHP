<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table{
        width: 300px;
        margin: auto;
        background-color: #FFC;
        border: 2px solid #F00;
        padding: 5px;
    }
    td{
         text-align: right;
    }
    h1{
        text-align: center;
    }
</style>
</head>
<body>
<h1>REGÍSTRATE</h1>
<form name="form1" method="post" action="pagina_insertar_usuarios.php">
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
            <td>Constraseña:</td>
            <td>
                <label for="contra"></label>
                <input type="text" name="contra" id="contra"></td>
        </tr>
        <tr>
            <td>País:</td>
            <td>
                <label for="pais"></label>
                <input type="text" name="pais" id="pais"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="left"><input type="submit" name="send" id="send" value="Enviar"></td>
        </tr>
    </table>
</form>
</body>
</html>
