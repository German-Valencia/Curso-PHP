<?php

//el objeto tiene el ATRIBUTO ruedas se usa PUBLIC solo dentro de la clase
class Coche
{
    protected $ruedas;
    public $color;
    protected $motor;

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
    
    
    //metodo getter sirve para ver las propieades de un objeto    
    public function get_ruedas()
    {
        return $this->ruedas;
    }
    function get_motor(){
        return $this->motor;
    }

    //--------------------------------------------------------------

    public function girar()
    {
        echo "Estoy girando.<br>";
    }
    public function frenar()
    {
        echo "Estoy frenando.<br>";
    }
    //metodo setter sirve para modificar las propieades de un objeto
    public function set_color($color_coche, $nombre_coche)
    {
        $this->color = $color_coche;
        echo "El color del coche $nombre_coche es: " . $this->color . "<br>";
    }

}
//estado inicial al objeto (instancia)
/* $renault = new Coche();
$mazda = new Coche();
$seat = new Coche();

$renault->establece_color("Rojo", "Renault");
$seat->establece_color("Azul", "Seat"); */

//llamada a un METODO para que el objeto haga la tarea -GIRAR
//$mazda->girar();

//para acceder a una PROPIEDAD:
//echo $mazda->ruedas;

//------------------------------------------------------------------------------------------------------------------

class Camion extends Coche
{

    public function __construct()
    {
        $this->ruedas = 8;
        $this->color = "Gris";
        $this->motor = 2600;
    }
    public function set_color($color_camion, $nombre_camion)
    {
        $this->color = $color_camion;
        echo "El color del camión $nombre_camion es: " . $this->color . "<br>";
    }
    public function arrancar()
    {
        parent::arrancar(); //parent::   ejecuta todo el método de la clase padre
        echo "Camión arrancado.";
    }

}
