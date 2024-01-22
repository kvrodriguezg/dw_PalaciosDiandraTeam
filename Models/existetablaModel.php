<?php
class ExisteTabla
{
    private $db;
    public function __construct()
    {
        require_once("conexion.php");
        $this->db = Conectarse();
    }

    public function comprobarTabla($tabla)
    {
        $query = "SHOW TABLES LIKE '$tabla';";
        $existe = mysqli_query($this->db, $query);
        if (!$existe) {
            return false;
        }
        return true;
    }

    private function crearTabla($nombreTabla, $sql)
    {
        $query = "CREATE TABLE IF NOT EXISTS $nombreTabla ($sql);";
        $creacion = mysqli_query($this->db, $query);
        if (!$creacion) {
            echo "Error al crear la tabla $nombreTabla: " . mysqli_error($this->db);
        }
    }

    public function crearTablas()
    {
        $this->crearTabla("Perfiles", "IDPerfil INT PRIMARY KEY AUTO_INCREMENT, TipoPerfil VARCHAR(50) NOT NULL");
        $this->crearTabla("CentrosMedicos", "IDCentroMedico INT PRIMARY KEY AUTO_INCREMENT, NombreCentro VARCHAR(100) NOT NULL, codigo VARCHAR(5) NOT NULL");
        $this->crearTabla("Usuarios", "IDUsuario INT PRIMARY KEY AUTO_INCREMENT, Nombre VARCHAR(50) NOT NULL, Correo VARCHAR(50) NOT NULL, Rut VARCHAR(10) UNIQUE NOT NULL, Clave VARCHAR(100) NOT NULL, IDPerfil INT NOT NULL, IDCentroMedico INT, FOREIGN KEY (IDCentroMedico) REFERENCES CentrosMedicos(IDCentroMedico), FOREIGN KEY (IDPerfil) REFERENCES Perfiles(IDPerfil)");
        $this->crearTabla("Pacientes", "IDPaciente INT PRIMARY KEY AUTO_INCREMENT, NombrePaciente VARCHAR(100) NOT NULL, RutPaciente VARCHAR(12) NOT NULL, DomicilioPaciente VARCHAR(200) NOT NULL");
        $this->crearTabla("Diagnosticos", "CodigoDiagnosticos VARCHAR(5) PRIMARY KEY NOT NULL, Codigo INT NOT NULL, Diagnostico VARCHAR(255) NOT NULL");
        $this->crearTabla("Examenes", "IDExamen INT PRIMARY KEY AUTO_INCREMENT, NombreExamen VARCHAR(100) NOT NULL, IDPaciente INT NOT NULL, IDCentroSolicitante INT NOT NULL, CodigoDiagnosticos VARCHAR(5), FechaTomaMuestra DATE NOT NULL, FechaRecepcion DATE NOT NULL, Fechatincion DATE, Fechadiagnostico DATE, FOREIGN KEY (CodigoDiagnosticos) REFERENCES Diagnosticos(CodigoDiagnosticos), FOREIGN KEY (IDCentroSolicitante) REFERENCES CentrosMedicos(IDCentroMedico), FOREIGN KEY (IDPaciente) REFERENCES Pacientes(IDPaciente)");
    }
}
