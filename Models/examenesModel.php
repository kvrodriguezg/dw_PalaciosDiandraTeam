<?php
class examenesModel
{
    private $db;
    public function __construct()
    {
        require_once("conexion.php");
        $this->db = Conectarse();
    }

    public function obtenerDatosExamenes()
    {
        $query = "SELECT * FROM Examenes;";
        $result = mysqli_query($this->db, $query);
        if ($result ) {
            return $result ;
        }
    }

    public function obtenerDomicilioPaciente($rut)
    {
        $query = "SELECT DomicilioPaciente FROM Pacientes WHERE RutPaciente='$rut';";
        $result = mysqli_query($this->db, $query);
        if ($result ) {
            $row = mysqli_fetch_array($result);
            return $row['DomicilioPaciente'] ;
        }
        else{
            echo "error". mysqli_error($this->db);
        }
    }

    public function obtenerNombrePaciente($rut)
    {
        $query = "SELECT NombrePaciente FROM Pacientes WHERE RutPaciente='$rut';";
        $result = mysqli_query($this->db, $query);
        if ($result ) {
            $row = mysqli_fetch_array($result);
            return $row['NombrePaciente'] ;
        }
    }

    public function obtenerCentroMedico($idCentroMedico)
    {
        $query = "SELECT NombreCentro FROM centrosmedicos WHERE IDCentroMedico =$idCentroMedico;";
        $result = mysqli_query($this->db, $query);
        if ($result ) {
            $row = mysqli_fetch_array($result);
            return $row['NombreCentro'] ;
        }
    }

    public function obtenerDiagnostico($codDiagnostico)
    {
        if($codDiagnostico!=null)
        {
            $query = "SELECT Diagnostico FROM diagnosticos WHERE CodigoDiagnosticos ='$codDiagnostico';";
            $result = mysqli_query($this->db, $query);
            if ($result) {
                $row = mysqli_fetch_array($result);
                return $row['Diagnostico'] ;
            }
            else
            {
                return "error". mysqli_query($this->db, $query);
            }
        }
        else
        {
            return " ";
        }

    }

    public function obtenerEstados($perfil)
    {
        $query = "SELECT * FROM estados WHERE IDPerfil = (SELECT IDPerfil FROM perfiles WHERE TipoPerfil= '$perfil')";
        $result = mysqli_query($this->db, $query);
        if ($result ) {
            return $result ;
        }
    }

    
}