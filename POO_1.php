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

//el objeto tiene el ATRIBUTO ruedas se usa PUBLIC solo dentro de la clase
class Coche
{
    public $ruedas;
    public $color;
    public $motor;

    //el CONSTRUCTOR DE UNA CLASE va a indicar el estado inicial de los objetos que pertenezcan a esta clase
    public function __construct()
    { //METODO CONSTRUCTOR
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

//cuando la FUNCIÓN va dentro de la clase se llama MÉTODO
    public function arrancar()
    {
        echo "Estoy arrancando.<br>";
    }
    public function girar()
    {
        echo "Estoy girando.<br>";
    }
    public function frenar()
    {
        echo "Estoy frenando.<br>";
    }
    public function establece_color($color_coche, $nombre_coche)
    {
        $this->color = $color_coche;
        echo "El color del coche $nombre_coche es: " . $this->color . "<br>";
    }

}
//estado inicial al objeto (instancia)
$renault = new Coche();
$mazda = new Coche();
$seat = new Coche();

$renault->establece_color("Rojo", "Renault");
$seat->establece_color("Azul", "Seat");

//llamada a un METODO para que el objeto haga la tarea -GIRAR
//$mazda->girar();

//para acceder a una PROPIEDAD:
//echo $mazda->ruedas;

?>
</body>
</html>