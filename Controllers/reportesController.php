<?php
include("../Models/reportesModel.php");
$reporte = new ReportesModel();
$centrosMedicos = $reporte->obtenerNombresCentrosMedicos();
$diagnosticos = $reporte->obtenerNombresDiagnosticos();
$examenes = $reporte->obtenerNombresExamenes();