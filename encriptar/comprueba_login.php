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
        $login=htmlentities(addslashes($_POST["login"]));
        $password=htmlentities(addslashes($_POST["password"]));
        $contador=0;
        $base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        $sql="SELECT * FROM datospersonales WHERE nombre= :login";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":login"=>$login));
        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "Usuario: " . $registro['nombre'] . " Contraseña: " . $registro['contra'] . "<br>";            
           if (password_verify($password, $registro['contra'])) {
               $contador++;
           }
        }
if ($contador>0) {
    echo "Usuario registrado" . $contador;

}else{
    echo "Usuario no registrado";
}        
$resultado->closeCursor();
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
    ?>
</body>
</html>