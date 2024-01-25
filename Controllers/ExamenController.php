<?php
include "../Models/creacionexamenModel.php";

$examen= new examenModel();



if (!empty($_POST["ingreso"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["domicilio"]) && !empty($_POST["rut"])) {
        $nombre=$_POST["nombre"];
        $domicilio=$_POST["domicilio"];
        $rut=$_POST["rut"];
        $validacion = $examen->validarPaciente($rut);
        if($validacion==false){
            $insertar=$examen->insertarPaciente($nombre,$domicilio,$rut);
        }
    }else{
        echo '<script>alert("Algunos campos estan vacios");</script>';
    }
}
