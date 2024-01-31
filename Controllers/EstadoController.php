<?php
include("../Models/estados_model.php");
include("../Models/perfilesmodel.php");
$objetoEstado = new Estados();
$objetoPerfiles = new perfiles();


if  (isset($_POST['NombreEstado'])) {
    $NombreEstado = $_POST['NombreEstado'];
    $IDPerfil = $_POST['IDPerfil'];
    $insertarEstado = $objetoEstado->InsertaEstado($NombreEstado,$IDPerfil);

    $mensaje="Estado Creado Correctamente";

    header("Location: mantenedorestados.php?mensaje=".urlencode($mensaje)); 
    exit();
}

$DetalleEstados = $objetoEstado->MostrarEstados();
$DetallePerfiles = $objetoPerfiles->verPerfiles();

if  (isset($_POST['AgregaNEstado'])) {
    $AgregaNEstado = $_POST['AgregaNEstado'];
    $EditarEstado = $objetoEstado->ModificarEstado($AgregaNEstado,$AgregaPerfEstado,$IDEstado);

    $mensaje="Estado Modificado Correctamente";
    
    header("Location: mantenedorestados.php?mensaje=".urlencode($mensaje));
    exit();
}


if  (isset($_POST['IDEstado'])) {
    $AgregaNEstado = $_POST['IDEstado'];
    $EliminaEstado = $objetoEstado->EliminaEstado($AgregaNEstado);

    $mensaje="Estado Eliminado Correctamente";
    
    header("Location: mantenedorestados.php?mensaje=".urlencode($mensaje));
    exit();
}


?>