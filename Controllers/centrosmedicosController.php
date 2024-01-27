<?php
include("../Models/centromedicoModel.php");

$objCentros = new centromedico();

// Creación de CENTRO si no existe
if (isset($_POST['crearcentros'])) {
    $objCentros->crearCentros();
} 

$listCentros = $objCentros->verCentros();

if (isset($_POST['op']) && $_POST['op'] == "GUARDAR" && isset($_POST['nombreCentro']) && isset($_POST['CodigoCentro'])) {
    $nombreCentro = $_POST['nombreCentro'];
    $CodigoCentro = $_POST['CodigoCentro'];
    $insertarCentro = $objCentros->insertarCentro($nombreCentro,$CodigoCentro);

    header("Location: mantenedorlaboratorios.php"); 
    exit();
}


//EDITAR CENTRO
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['op']) && $_POST['op'] == "Modificar" && isset($_POST['IDCentroMedico']) && isset($_POST['NombreCentro']) && isset($_POST['codigo'])) {
    $nombreCentro = $_POST['NombreCentro'];
    $CodigoCentro = $_POST['codigo'];
    $IDCentroMedico = $_POST['IDCentroMedico'];
    $editarCentro = $objCentros->modificarCentro($IDCentroMedico,$nombreCentro,$CodigoCentro);
    echo "IDCentroMedico $IDCentroMedico nombreCentro $nombreCentro , CodigoCentro $CodigoCentro";
    header("Location: mantenedorlaboratorios.php"); 
    exit();
}
// Eliminar CENTRO 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['op']) && $_POST['op'] == "eliminar" && isset($_POST['IDCentroMedico'])) {
    $IDCentroMedico = $_POST['IDCentroMedico'];
    $borrarPerfil = $objCentros->eliminarCentro($IDCentroMedico);
    
       header("Location: mantenedorlaboratorios.php"); 
}