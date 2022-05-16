<?php
class Compra_vehiculo
{
    private $precio_base;

    // private static $ayuda = 4500; //este campo solo pertenece a la clase
    private static $ayuda = 0;
    public function __construct($gama)
    {
        if ($gama == "urbano") {
            $this->precio_base = 10000;
        } else if ($gama == "compacto") {
            $this->precio_base = 20000;
        } else if ($gama == "berlina") {
            $this->precio_base = 30000;
        }
    }

    public static function descuento_gobierno()
    {
        if (date("y-m-d") !== "22-05-15") {
            self::$ayuda = 4500; //hacemos referencia a una variable estática privada encontrándonos dentro de la misma clase
        }
    }

    public function climatizador()
    {
        $this->precio_base += 2000;
    }
    public function navegador_gps()
    {
        $this->precio_base += 2500;
    }
    public function tapiceria_cuero($color)
    {
        if ($color == "blanco") {

            $this->precio_base += 3000;
        } else if ($color == "beige") {
            $this->precio_base += 3500;
        } else {
            $this->precio_base += 5000;
        }
    }
    public function precio_final()
    {
        $valor_final = $this->precio_base - self::$ayuda; //se hace referencia a la variable estatica
        return $valor_final;
    }
}
