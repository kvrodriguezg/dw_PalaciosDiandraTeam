<?php
include("../Models/examenesModel.php");
$examen = new examenesModel();
$examenes = $examen->obtenerDatosExamenes();
$examenesTincion = $examen->obtenerExamenesTincion();
$examenesDiagnostico = $examen->obtenerExamenesDiagnosticos();

if (isset($_POST['actualizarEstado'])) {
    $idExamen=$_POST['idExamen'];
    $idEstado=$_POST['estado'];
    $examen->cambiarEstado($idEstado,$idExamen);
    header("Location: " . $_SERVER['HTTP_REFERER']);
}

if (isset($_POST['actualizarEstadoDiagnostico'])) {
    $idExamen=$_POST['idExamen'];
    $idEstado=$_POST['estado'];
    $diagnostico=$_POST['diagnostico'];
    $examen->cambiarEstado($idEstado,$idExamen);
    $examen->actualizarDiagnostico($idExamen,$diagnostico);
    header("Location: " . $_SERVER['HTTP_REFERER']);
}

if (isset($_POST['actualizarEstadoTincion'])) {
    $idExamen=$_POST['idExamen'];
    $idEstado=$_POST['estado'];
    $examen->actualizarTincion($idExamen,$idEstado);
    header("Location: " . $_SERVER['HTTP_REFERER']);
}

if (isset($_POST['eliminarRegistro'])) {
    $idExamen=$_POST['idExamen'];
    $examen->eliminarRegistro($idExamen);
    header("Location: " . $_SERVER['HTTP_REFERER']);
}

