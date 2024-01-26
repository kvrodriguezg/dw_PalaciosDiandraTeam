<?php

require_once("Models/access_usuario.php");
$Usuarios = new access_model();
$matrizp = $Usuarios -> get_access();
require_once 'Views/creacionusuarios.php';
?>






?>