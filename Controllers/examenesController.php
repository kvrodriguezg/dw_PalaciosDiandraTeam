<?php
include("../Models/examenesModel.php");
$examen = new examenesModel();
$examenes = $examen->obtenerDatosExamenes();
