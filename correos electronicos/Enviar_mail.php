<?php
$texto_mail=$_POST["comentarios"];
$destinatario=$_POST["email"];
$asunto=$_POST["asunto"];
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: ' . "Prueba Germán < gavtl42@gmail.com >" . "\r\n";
$headers .= 'Cc: ' . "Prueba Germán < fulanitos75@gmail.com >" . "\r\n";
$headers .= 'Bcc: ' . "Prueba Germán < transilvaniacoc@gmail.com >" . "\r\n";
$exito=mail($destinatario,$asunto,$texto_mail,$headers);
if ($exito) {
    echo "El mensaje se ha enviado correctamente";
} else {
    echo "El mensaje no se ha podido enviar";
}
?>