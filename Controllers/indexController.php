<?php
include("Models/existetablaModel.php");
$existe = new ExisteTabla();
$tablas = ["Perfiles", "Usuarios", "Estados", "CentrosMedicos", "Examenes", "Diagnosticos", "Pacientes"];
$validacionExistencia = true;

foreach ($tablas as $tabla) {
    $query = $existe->comprobarTabla($tabla);
    if (!$query) {
        $validacionExistencia = false;
    }
}

//Creacion de tablas si no existen.
if (isset($_POST['crearTabla'])) {
    $existe->crearTablas();
    echo "<script>alert('Creacion de Tablas')</script>";
    $validacionExistencia = true;
}

