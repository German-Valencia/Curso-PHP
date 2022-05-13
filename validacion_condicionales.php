<style>
h1{
    text-align:center;
}
table{
    background-color:#FFC;
    padding: 5px;
    border:#666 5px solid;
}
.no_validado{
    font-size:18px;
    color:#F00;
    font-weight:bold;
}
.validado{
    font-size:18px;
    color:#0C3;
    font-weight:bold;
}
</style>

<?php

if (isset($_POST["enviando"])) {

    $password = $_POST["password"];

    $nombre = $_POST["nombre_usuario"];

    //echo $nombre === "German" && $password === "1234" ? "Bienvenido" : "Largate";

    switch (true) {
        case $nombre === "Juan" && $password === "1111":
            echo "Usuario autorizado. Hola Juan";
            break;
        case $nombre === "María" && $password === "2222":
            echo "Usuario autorizado. Hola María";
            break;
        case $nombre === "Pedro" && $password === "3333":
            echo "Usuario autorizado. Hola Pedro";
            break;
        default:
            echo "Usuario NO autorizado. Largate";
    }

}

?>