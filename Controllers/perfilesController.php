<?php
include("../Models/perfilesModel.php");
$objPerfil = new Perfiles();

// Creación de perfiles si no existe
if (isset($_POST['crearPerfiles'])) {
    $objPerfil->crearperfiles();
} 

// Insertar perfil solo si se ha enviado el formulario correspondiente
if (isset($_POST['op']) && $_POST['op'] == "GUARDAR" && isset($_POST['tipoPerfil'])) {
    $tipoPerfil = $_POST['tipoPerfil'];
    $insertarperfil = $objPerfil->insertarPerfil($tipoPerfil);

    header("Location: mantenedorPerfiles.php"); 
    exit();
}

// Ver perfiles
$listperfiles = $objPerfil->verPerfiles();

// Eliminar perfil solo si se ha enviado el formulario correspondiente
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['op']) && $_POST['op'] == "eliminar" && isset($_POST['IDPerfil'])) {
    $IDPerfil = $_POST['IDPerfil'];
    $borrarPerfil = $objPerfil->eliminarPerfil($IDPerfil);

     
        header("Location: mantenedorPerfiles.php"); 
}

require_once '../Views/mantenedorPerfiles.php';
?>
