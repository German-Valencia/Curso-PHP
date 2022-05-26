<?php
require_once "Model/Personas_modelo.php";
$persona = new Personas_modelo();
$matrizPersonas = $persona->get_personas();

require_once "View/Personas_view.php";
