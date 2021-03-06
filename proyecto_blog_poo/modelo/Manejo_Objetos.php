<?php

include_once "Objeto_Blog.php";

class Manejo_Objetos
{
    private $conexion;
    public function __construct($conexion)
    {
        $this->setConexion($conexion);

    }
    public function setConexion(PDO $conexion)
    {
        $this->conexion = $conexion;
    }
    public function getContenidoPorFecha()
    {
        $matriz = array();
        $contador = 0;
        $resultado = $this->conexion->query("SELECT * FROM contenido ORDER BY FECHA DESC");
        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $blog = new Objeto_Blog();
            $blog->setId($registro['ID']);
            $blog->setTitulo($registro['TITULO']);
            $blog->setFecha($registro['FECHA']);
            $blog->setComentario($registro['COMENTARIO']);
            $blog->setImagen($registro['IMAGEN']);
            $matriz[$contador] = $blog;
            $contador++;
        }
        return $matriz;
    }
    public function setContenido(Objeto_Blog $blog)
    {
        $sql = "INSERT INTO contenido (TITULO, FECHA, COMENTARIO, IMAGEN) VALUES ('" . $blog->getTitulo() . "','" . $blog->getFecha() . "','" . $blog->getComentario() . "','" . $blog->getImagen() . "')";
        $this->conexion->exec($sql);
    }
}
