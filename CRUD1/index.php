<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>
  <?php
include "conexion.php";
/* $conexion=$base->query("SELECT * FROM datos_usuarios");
$registros=$conexion->fetchAll(PDO::FETCH_OBJ); */

//-------------------------paginacion--------------------------
$tam_pag = 3;
        if (isset($_GET["pagina"])) {
            if ($_GET["pagina"]==1) {
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
//-------------------------paginacion--------------------------
$registros = $base->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde, $tam_pag")->fetchAll(PDO::FETCH_OBJ);

if (isset($_POST["cr"])) {
    $nom = $_POST["Nom"];
    $ape = $_POST["Ape"];
    $dir = $_POST["Dir"];

    $sql = "INSERT INTO datos_usuarios (Nombre, Apellido, Direccion) VALUES (:nom, :ape, :dir)";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":nom" => $nom, ":ape" => $ape, ":dir" => $dir));
    header("location:index.php");
}

?>
  <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

  <table width="50%" border="0" align="center">
    <tr>
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr>


    <?php
foreach ($registros as $persona): ?>
      <tr>
        <td><?php echo $persona->id ?></td>
        <td><?php echo $persona->Nombre ?></td>
        <td><?php echo $persona->Apellido ?></td>
        <td><?php echo $persona->Direccion ?></td>
        <td class="bot"> <a href="borrar.php?id=<?php echo $persona->id ?>"> <input type='button' name='del' id='del' value='Borrar'></a></td>
        <td class='bot'> <a href="editar.php?id=<?php echo $persona->id ?>
                                        & nom=<?php echo $persona->Nombre ?>
                                        & ape=<?php echo $persona->Apellido ?>
                                        & dir=<?php echo $persona->Direccion ?>"> <input type='button' name='up' id='up' value='Actualizar'></a></td>
      </tr>
    <?php
endforeach;
?>

    <tr>
      <td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
    </tr>
  </table>

  </form>
  <div>Paginación</div>
  <p>
  <!-- //-----------------------PAGINACIÓN--------------------------- -->
  <?php  
  for ($i = 1; $i <= $total_pag; $i++) {
        echo "<a href='?pagina=" . $i . "'> " . $i . "</a>  ";        
    }
    ?>
    <!--  //-----------------------PAGINACIÓN--------------------------- -->
  </p>
  <p>&nbsp;</p>
</body>

</html>