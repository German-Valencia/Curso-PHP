<style>

.no_validado{
    font-size:18px;
    color:#F00;
    font-weight:bold;
    text-align:center;
}
.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
        text-align:center;
	}
</style>

<?php

if (isset($_POST["enviando"])) { //comprueba si se ha enviado el boton de enviar
    $usuario = $_POST["nombre_usuario"]; //$_POST : variable super global son arrays
    $edad = $_POST["edad_usuario"];

    if ($usuario == "Juan" && $edad>=18) {
        echo " <p class='validado'> Puedes entrar </p>";
    } else {
        echo " <p class='no_validado'> No puedes entrar </p>";
    }
}

?>