<?php
class examenModel {

    private $db;
    public function __construct()
    {
        require_once("conexion.php");
        $this->db = Conectarse();
    }

    public function insertarPaciente($nombre, $domicilio, $rut) {

        $nombre = mysqli_real_escape_string($this->db, $nombre);
        $domicilio = mysqli_real_escape_string($this->db, $domicilio);
        $rut = mysqli_real_escape_string($this->db, $rut);

        $query = "INSERT INTO pacientes (NombrePaciente, DomicilioPaciente, RutPaciente) VALUES ('$nombre', '$domicilio', '$rut')";
        mysqli_query($this->db, $query);

        if (mysqli_error($this->db)) {
   
            echo "Error al insertar paciente: " . mysqli_error($this->db);
        }
    }

    public function validarPaciente($rut){
        $query = "select * from pacientes where rutPaciente = '$rut'";
        $existe = mysqli_query($this->db,$query);
        if (mysqli_num_rows($existe) > 0){
            return true;
        }else{
            return false;
        }
    }
}
?>