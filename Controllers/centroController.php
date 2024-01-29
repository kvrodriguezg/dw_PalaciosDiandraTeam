<?php
include("../Models/centromedicoModel.php");
session_start();
$objCentros = new centromedico();
$idCentro = $_SESSION['idCentro'];
$listExamenes = $objCentros->buscarExamenes($idCentro);

$nombreCentro = $objCentros->nombreCentro($idCentro);
