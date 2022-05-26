<?php
include("Conectar.php");
$base=Conectar::conexion();
$id=$_GET["id"];
$base->query("DELETE FROM datos_usuarios WHERE id='$id'");
header("location:../index.php");

?>