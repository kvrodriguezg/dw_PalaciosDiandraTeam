<?php 
require_once("../Models/existetablaModel.php");
$existe = new ExisteTabla();
$tablas = ["Perfiles","Usuarios","Estados","CentrosMedicos","Examenes","Diagnosticos","Pacientes"];
$validacionExistencia = true;


foreach ($tablas as $tabla)
{
    $query = $existe->comprobarTabla($tabla);
    if (!$query)
    {
        $validacionExistencia = false;
    }
}

//Creacion de tablas si no existen.
if (isset($_POST['crearTabla'])) 
{
    $existe->crearTablas();
    $validacionExistencia = true;
}




require_once ("../index.php");
