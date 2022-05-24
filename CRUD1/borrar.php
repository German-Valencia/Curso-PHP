<?php
include("conexion.php");
$id=$_GET["id"];
$base->query("DELETE FROM datos_usuarios WHERE id='$id'");
header("location:index.php");

?>