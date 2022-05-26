<?php

require_once"Conectar.php";
$base=Conectar::conexion();


$tam_pag = 3;
if (isset($_GET["pagina"])) {
    if ($_GET["pagina"] == 1) {
        header("location:index.php");
    } else {
        $pagina = $_GET["pagina"];
    }
} else {
    $pagina = 1;
}
$empezar_desde = ($pagina - 1) * $tam_pag;
$sql_total = "SELECT * FROM datos_usuarios";
$resultado = $base->prepare($sql_total);
$resultado->execute(array());
$num_filas = $resultado->rowCount();
$total_pag = ceil($num_filas / $tam_pag);
