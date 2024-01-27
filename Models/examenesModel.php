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
        if ($result) {
            return $result;
        }
    }

    public function obtenerExamenesDiagnosticos()
    {
        $query = "SELECT * FROM Examenes WHERE IDEstado = (SELECT IDEstado FROM estados WHERE NombreEstado = 'Listo para Diagnóstico')";
        $result = mysqli_query($this->db, $query);
        if ($result) {
            return $result;
        }
    }

    public function obtenerExamenesTincion()
    {
        $query = "SELECT * FROM Examenes WHERE IDEstado = (SELECT IDEstado FROM estados WHERE NombreEstado = 'Listo para Tinción')";
        $result = mysqli_query($this->db, $query);
        if ($result) {
            return $result;
        }
    }

    public function obtenerDomicilioPaciente($rut)
    {
        $query = "SELECT DomicilioPaciente FROM Pacientes WHERE RutPaciente='$rut';";
        $result = mysqli_query($this->db, $query);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row['DomicilioPaciente'];
        } else {
            echo "error" . mysqli_error($this->db);
        }
    }

    public function obtenerNombrePaciente($rut)
    {
        $query = "SELECT NombrePaciente FROM Pacientes WHERE RutPaciente='$rut';";
        $result = mysqli_query($this->db, $query);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row['NombrePaciente'];
        }
    }

    public function obtenerCentroMedico($idCentroMedico)
    {
        $query = "SELECT NombreCentro FROM centrosmedicos WHERE IDCentroMedico =$idCentroMedico;";
        $result = mysqli_query($this->db, $query);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row['NombreCentro'];
        }
    }

    public function obtenerDiagnostico($codDiagnostico)
    {
        if ($codDiagnostico != null) {
            $query = "SELECT Diagnostico FROM diagnosticos WHERE CodigoDiagnosticos ='$codDiagnostico';";
            $result = mysqli_query($this->db, $query);
            if ($result) {
                $row = mysqli_fetch_array($result);
                return $row['Diagnostico'];
            } else {
                return "error" . mysqli_query($this->db, $query);
            }
        } else {
            return " ";
        }
    }

    public function obtenerEstados($perfil)
    {
        $query = "SELECT * FROM estados WHERE IDPerfil = (SELECT IDPerfil FROM perfiles WHERE TipoPerfil= '$perfil')";
        $result = mysqli_query($this->db, $query);
        if ($result) {
            return $result;
        }
    }

    public function obtenerEstadoActual($idEstado)
    {
        $query = "SELECT NombreEstado FROM estados WHERE IDEstado = $idEstado;";
        $result = mysqli_query($this->db, $query);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row['NombreEstado'];
        }
    }

    public function cambiarEstado($idEstado, $idExamen)
    {
        $query = "UPDATE Examenes SET IDEstado = $idEstado WHERE IDExamen = $idExamen;";
        $result = mysqli_query($this->db, $query);
        if ($result) {
            return true;
        } else {
            echo "Error: " . mysqli_error($this->db);
            return false;
        }
    }

    public function actualizarTincion($idExamen, $idEstado)
    {
        $fechaTincion = date("Y-m-d");
        $query = "UPDATE Examenes SET IDEstado = $idEstado, Fechatincion = '$fechaTincion' WHERE IDExamen = $idExamen;";
        $result = mysqli_query($this->db, $query);
    
        if ($result) {
            return true;
        } else {
            echo "Error: " . mysqli_error($this->db);
            return false;
        }
    }


    public function obtenerListaDiagnosticos()
    {
        $query = "SELECT * FROM diagnosticos;";
        $result = mysqli_query($this->db, $query);
        if ($result) {
            return $result;
        }
    }
    public function actualizarDiagnostico($idExamen, $diagnostico)
    {
        $fechaDiagnostico = date("Y-m-d");
        $query = "UPDATE Examenes SET CodigoDiagnosticos = '$diagnostico', Fechadiagnostico = '$fechaDiagnostico' WHERE IDExamen = $idExamen;";
        $result = mysqli_query($this->db, $query);

        if ($result) {
            return true;
        } else {
            echo "Error: " . mysqli_error($this->db);
            return false;
        }
    }

    public function eliminarRegistro($idExamen)
    {
        $query = "DELETE FROM Examenes WHERE IDExamen = $idExamen;";
        $result = mysqli_query($this->db, $query);

        if ($result) {
            return true;
        } else {
            echo "Error: " . mysqli_error($this->db);
            return false;
        }
    }
}
