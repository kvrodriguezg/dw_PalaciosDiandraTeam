<?php
//$directorioActual = __DIR__;
//$ruta = dirname($directorioActual) . "/Models/estados_model.php";
//require_once $ruta;
include("../Models/estados_model.php");
include("../Models/perfilesModel.php");
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
    $perfilSelecionado = $_POST['IDPerfil'];
    $IDEstado = $_POST['IDEstado'];
    $EditarEstado = $objetoEstado->ModificarEstado($AgregaNEstado,$perfilSelecionado,$IDEstado);


    $mensaje="Estado Modificado Correctamente".$AgregaNEstado.' - '.$perfilSelecionado;
    
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