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
        $query = "SELECT DomicilioPaciente FROM Pacientes WHERE rut='$rut';";
        $result = mysqli_query($this->db, $query);
        if ($result ) {
            $row = mysqli_fetch_array($result);
            return $row['DomicilioPaciente'] ;
        }
    }

    public function obtenerNombrePaciente($rut)
    {
        $query = "SELECT NombrePaciente FROM Pacientes WHERE rut='$rut';";
        $result = mysqli_query($this->db, $query);
        if ($result ) {
            $row = mysqli_fetch_array($result);
            return $row['NombrePaciente'] ;
        }
    }

    public function obtenerCentroMedico($idCentroMedico)
    {
        $query = "SELECT NombreCentro FROM centrosmedicos WHERE IDCentroMedico ='$idCentroMedico';";
        $result = mysqli_query($this->db, $query);
        if ($result ) {
            $row = mysqli_fetch_array($result);
            return $row['NombreCentro'] ;
        }
    }

}