<?php
require 'Conexion.php';

class DevuelveProductos extends Conexion
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_productos($dato)
    {
        $sql = "SELECT * FROM datospersonales WHERE país='" . $dato . "'";
        $sentencia = $this->conexion_db->prepare($sql);
        $sentencia->execute(array());
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->conexion_db = null;
//----------------------------------------------------------------------------------------------------------------------
        /*    $resultado = $this->conexion_db->query('SELECT * FROM datospersonales WHERE nombre = "' . $dato . '"');
        $productos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $productos; */
//----------------------------------------------------------------------------------------------------------------------
    }
}
