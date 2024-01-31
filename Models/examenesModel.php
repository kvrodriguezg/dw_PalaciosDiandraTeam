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

    public function obtenerExamenesRegistro()
    {
        $query = "SELECT * FROM Examenes WHERE IDEstado = (SELECT IDEstado FROM estados WHERE NombreEstado = 'Realizado')";
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
            $query = "SELECT descripcion FROM diagnosticos WHERE codigo ='$codDiagnostico';";
            $result = mysqli_query($this->db, $query);
            if ($result) {
                $row = mysqli_fetch_array($result);
                return $row['descripcion'];
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
        $query = "UPDATE examenes SET IDEstado = ? WHERE IDExamen = ?";

        $stmt = mysqli_prepare($this->db, $query);

        mysqli_stmt_bind_param($stmt, "ii", $idEstado, $idExamen);

        $result = mysqli_stmt_execute($stmt);

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
        $query = "UPDATE Examenes SET IDEstado = ?, Fechatincion = ? WHERE IDExamen = ?";

        $stmt = mysqli_prepare($this->db, $query);

        mysqli_stmt_bind_param($stmt, "iss", $idEstado, $fechaTincion, $idExamen);

        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

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
        $query = "UPDATE Examenes SET CodigoDiagnosticos = ?, Fechadiagnostico = ? WHERE IDExamen = ?";

        $stmt = mysqli_prepare($this->db, $query);

        mysqli_stmt_bind_param($stmt, "ssi", $diagnostico, $fechaDiagnostico, $idExamen);

        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        if ($result) {
            return true;
        } else {
            echo "Error: " . mysqli_error($this->db);
            return false;
        }
    }

    public function eliminarRegistro($idExamen)
    {
        $query = "DELETE FROM Examenes WHERE IDExamen = ?";

        $stmt = mysqli_prepare($this->db, $query);

        mysqli_stmt_bind_param($stmt, "i", $idExamen);

        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        if ($result) {
            return true;
        } else {
            echo "Error: " . mysqli_error($this->db);
            return false;
        }
    }
}
