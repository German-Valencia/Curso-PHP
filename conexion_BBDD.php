<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    table{
        width: 95%;
        border: 1px dotted #FF0000;
        margin: auto;
    }
</style>

</head>
<body>
    <?php

// almacenamos los datos para conectar con la BD
require "datos_conexion.php";

//--------------------------------------conectando con procedimientos

//aqui conectamos con la bd mediante mysqli_connect
$conexion = @mysqli_connect($db_host, $db_usuario, $db_password);

//por si no conecta
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

//para especificar el nombre de la BD que estamos usando por si usamos varias no quede quemado
mysqli_select_db($conexion, $db_nombre) or die("no se encuentra la BD");

//para que reconozca tildes
mysqli_set_charset($conexion, "utf8");

// creamos sentencia SQl
$consulta = "select * from lideres where nombre='amparo'";

//almacenamos en un recordset los resultados que devuelve la sentencia SQL
$resultados = mysqli_query($conexion, $consulta);

//obtenemos la data indexada
/* while ($fila = mysqli_fetch_row($resultados)) {
    //obtenemos el primer registro del recorset
    echo "<table width='90%' align='center' border='2'><tr><td width='100px'>";
    echo $fila[0] . "</td><td width='100px'>";
    echo $fila[1] . "</td><td width='100px'>";
    echo $fila[2] . "</td><td width='100px'>";
    echo $fila[3] . "</td><td width='100px'>";
    echo $fila[4] . "</td><td width='100px'>";
    echo $fila[5] . "</td><td width='100px'>";
    echo $fila[6] . "</td><td width='100px'>";
    echo $fila[7] . "</td><td width='100px'>";
    echo $fila[8] . "</td><td width='20px'>";
    echo $fila[9] . "</td></tr></table><br><br>";    
} */

//obtenemos la data asociativa(en vez de indice un número)
while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) { 
    echo "<table width='90%' align='center' border='2'><tr><td width='100px'>";
    echo $fila["CEDULA"] . "</td><td width='100px'>";
    echo $fila["VINCULO"] . "</td><td width='100px'>";
    echo $fila["CONTACTADO"] . "</td><td width='100px'>";
    echo $fila["NOMBRE"] . "</td><td width='100px'>";
    echo $fila["APELLIDO"] . "</td><td width='100px'>";
    echo $fila["DIRECCION"] . "</td><td width='100px'>";
    echo $fila["TELEFONO"] . "</td><td width='100px'>";
    echo $fila["BARRIO"] . "</td><td width='100px'>";
    echo $fila["MUNICIPIO"] . "</td><td width='20px'>";
    echo $fila["VOTACION"] . "</td></tr></table>";    
}

//----------------------
//  % substituye a una cadena de caracteres ej: %palabraabuscar palabraabuscar% busca que termine o comience con la palabra se usa con LIKE
//  _ substituye a un único caracter
//----------------------



//para cerrar la conexion cuando ya no se va a usar
mysqli_close($conexion);

?>
</body>
</html>