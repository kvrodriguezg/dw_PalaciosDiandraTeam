<?php
require_once("../Models/existetablaModel.php");
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
    $validacionExistencia = true;
<<<<<<< HEAD
    echo '<div class="alert alert-success" role="alert">
    Tablas creadas con Exito!!
    </div>';
=======
    header('Location: ../index.php');
>>>>>>> 3cc9c6b3dcbf310c4dbd5fffbbf88706eae65b57
}

require_once("../index.php");
