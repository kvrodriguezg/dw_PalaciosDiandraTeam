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
        if (mysqli_num_rows($existe) == 0) {
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
        $this->crearTabla("Usuarios", "IDUsuario INT PRIMARY KEY AUTO_INCREMENT, usuario varchar(50), Nombre VARCHAR(50) NOT NULL, Correo VARCHAR(50) NOT NULL, Rut VARCHAR(10) UNIQUE NOT NULL, Clave VARCHAR(100) NOT NULL, IDPerfil INT NOT NULL, IDCentroMedico INT, FOREIGN KEY (IDCentroMedico) REFERENCES CentrosMedicos(IDCentroMedico), FOREIGN KEY (IDPerfil) REFERENCES Perfiles(IDPerfil)");
        $this->crearTabla("Pacientes", "NombrePaciente VARCHAR(100) NOT NULL, RutPaciente VARCHAR(12) PRIMARY KEY NOT NULL, DomicilioPaciente VARCHAR(200) NOT NULL");
        $this->crearTabla("Diagnosticos", "Codigo VARCHAR(2) NOT NULL PRIMARY KEY , descripcion VARCHAR(255) NOT NULL");
        $this->crearTabla("Estados", "IDEstado INT PRIMARY KEY AUTO_INCREMENT, NombreEstado VARCHAR(100) UNIQUE NOT NULL, IDPerfil INT, FOREIGN KEY (IDPerfil) REFERENCES Perfiles(IDPerfil)");
        $this->crearTabla("Examenes", "IDExamen INT PRIMARY KEY AUTO_INCREMENT, NombreExamen VARCHAR(100) NOT NULL, RutPaciente VARCHAR(12) NOT NULL, IDCentroSolicitante INT NOT NULL, IDEstado INT NOT NULL, CodigoDiagnosticos VARCHAR(5), FechaTomaMuestra DATE NOT NULL, FechaRecepcion DATE NOT NULL, Fechatincion DATE, Fechadiagnostico DATE, FOREIGN KEY (CodigoDiagnosticos) REFERENCES Diagnosticos(Codigo), FOREIGN KEY (IDCentroSolicitante) REFERENCES CentrosMedicos(IDCentroMedico), FOREIGN KEY (RutPaciente) REFERENCES Pacientes(RutPaciente), FOREIGN KEY (IDEstado) REFERENCES Estados(IDEstado)");
        echo "<script>alert('Tablas creadas.');</script>";
    }


    public function crearCentros()
    {
        if ($this->comprobarTabla("CentrosMedicos") == true) {
            $query = "INSERT IGNORE INTO centrosmedicos (NombreCentro, codigo) VALUES 
                ('MEGAMAN', 'MM'),
                ('ULTRAMAN', 'UM'),
                ('ULTRASEVEN', 'US');";
            $creacion = mysqli_query($this->db, $query);
    
            if (!$creacion) {
                echo "Error al crear datos " . mysqli_error($this->db);
            }
    
            return true;
        } else {
            return false;
        }
    }
    
    public function crearDiagnosticos()
    {
        if ($this->comprobarTabla("Diagnosticos") == true) {
            $query = "INSERT IGNORE INTO diagnosticos (CodigoDiagnosticos, Diagnostico) VALUES 
                ('A', 'NEGATIVO'),
                ('B', 'MUESTRA INADECUADA, VOLVER A TOMAR'),
                ('C', 'MUESTRA PRESENTA INFECCION'),
                ('D', 'POSIBLE ADENOCARCINOMA'),
                ('E', 'CANCER EPIDERMOIDE'),
                ('F', 'MUESTRA ATROFICA');";
            $creacion = mysqli_query($this->db, $query);
    
            if (!$creacion) {
                echo "Error al crear datos " . mysqli_error($this->db);
            }
    
            return true;
        } else {
            return false;
        }
    }
    
    public function crearPerfiles()
    {
        if ($this->comprobarTabla("Perfiles") == true) {
            $query = "INSERT IGNORE INTO perfiles (TipoPerfil) VALUES 
                ('diagnostico'),
                ('tincion'),
                ('recepcion'),
                ('registro'),
                ('administrador'),
                ('centromedico');";
            $creacion = mysqli_query($this->db, $query);
    
            if (!$creacion) {
                echo "Error al crear datos " . mysqli_error($this->db);
            }
    
            return true;
        } else {
            return false;
        }
    }
    
    public function crearEstados()
    {
        if ($this->comprobarTabla("Estados") == true) {
            $query = "INSERT IGNORE INTO estados (NombreEstado, IDPerfil) VALUES 
                ('Recepcionado', (SELECT IDPerfil FROM perfiles WHERE TipoPerfil = 'recepcion')),
                ('Listo para Tinción', (SELECT IDPerfil FROM perfiles WHERE TipoPerfil = 'recepcion')),
                ('Listo para Diagnóstico', (SELECT IDPerfil FROM perfiles WHERE TipoPerfil = 'tincion')),
                ('Realizado', (SELECT IDPerfil FROM perfiles WHERE TipoPerfil = 'diagnostico'));";
            $creacion = mysqli_query($this->db, $query);
    
            if (!$creacion) {
                echo "Error al crear datos " . mysqli_error($this->db);
            }
    
            return true;
        } else {
            return false;
        }
    }
    
}