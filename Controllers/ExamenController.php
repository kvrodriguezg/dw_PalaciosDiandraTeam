<?php
include "../Models/creacionexamenModel.php";
include "../Models/validacionrutModel.php";

$examen = new ExamenModel();  
$centrosmedicos=$examen->obtenerCentrosmedicos();
$valrut = new rutModel();

if (!empty($_POST["ingreso"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["domicilio"]) && !empty($_POST["rut"]) && !empty($_POST["nombreexamen"]) && !empty($_POST["fechamuestra"])){
        $nombre = $_POST["nombre"];
        $domicilio = $_POST["domicilio"];
        
        $rut = $_POST["rut"];
        /*if($valrut->validarut($rut)=="MAL"){
            echo '<script>alert("Algunos campos están vacíos");</script>';
        }*/
        $nombreexamen = $_POST["nombreexamen"];
        $fechamuestra = $_POST["fechamuestra"];
        $fecharecepcion = $_POST["fecharecepcion"];
        $idcentrosoli = $_POST["idcentrosoli"];
        
        $existePaciente = $examen->validarPaciente($rut);

        if ($existePaciente) {
            $domicilioActual = $examen->obtenerDomicilioPaciente($rut);
            if ($domicilioActual != $domicilio) {
                $examen->actualizarDomicilioPaciente($rut, $domicilio);
                echo '<script>alert("Domicilio actualizado correctamente");</script>';
            }
        } 
        if ($existePaciente==false) {
            $examen->insertarPaciente($nombre, $domicilio, $rut);
            $examen->insertarExamen($nombreexamen, $rut, $idcentrosoli, $fechamuestra, $fecharecepcion);
            echo '<script>alert("Paciente registrado correctamente");</script>';
        } else{
            $examen->insertarExamen($nombreexamen, $rut, $idcentrosoli, $fechamuestra, $fecharecepcion);
            echo '<script>alert("Paciente ya existe. Se ha registrado el examen.");</script>';
        }
    } else {
        echo '<script>alert("Algunos campos están vacíos");</script>';
    }
}

?>