<?php
include("../Models/estados_model.php");
$objetoEstado = new Estados();



if  (isset($_POST['NombreEstado'])) {
    $NombreEstado = $_POST['NombreEstado'];
    $insertarEstado = $objetoEstado->InsertaEstado($NombreEstado,$IDPerfil);

    $mensaje="Registro Creado Correctamente";
    
    header("Location: mantenedorestados.php".urlencode($mensaje)); 
    exit();
}

$DetalleEstados = $objetoEstado->MostrarEstados();


if  (isset($_POST['AgregaNEstado'])) {
    $AgregaNEstado = $_POST['AgregaNEstado'];
    $EditarEstado = $objetoEstado->ModificarEstado($AgregaNEstado,$AgregaPerfEstado,$IDEstado);

    header("Location: mantenedorestados.php"); 
    exit();
}


if  (isset($_POST['IDEstado'])) {
    $AgregaNEstado = $_POST['IDEstado'];
    $EliminaEstado = $objetoEstado->EliminaEstado($AgregaNEstado);

    header("Location: mantenedorestados.php"); 
    exit();
}
?>