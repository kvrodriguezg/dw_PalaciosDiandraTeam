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

    public function insertarExamen($nombreexamen,$rut,$idcentrosoli,$fechamuestra,$fecharecepcion){
        $nombreexamen = mysqli_real_escape_string($this->db, $nombreexamen);
        $rut = mysqli_real_escape_string($this->db, $rut);
        $idcentrosoli = mysqli_real_escape_string($this->db, $idcentrosoli);
        $fechamuestra = mysqli_real_escape_string($this->db, $fechamuestra);
        $fecharecepcion = mysqli_real_escape_string($this->db, $fecharecepcion);
        $query = "INSERT INTO examenes (NombreExamen,RutPaciente,IDCentroSolicitante,FechaTomaMuestra,FechaRecepcion, IDEstado) VALUES ('$nombreexamen','$rut','$idcentrosoli','$fechamuestra',NOW(), (SELECT IDEstado FROM estados WHERE NombreEstado = 'Recepcionado'));";
        /*if ($stmt = mysqli_prepare($this->db, $query)) {
            mysqli_stmt_bind_param($stmt, "ssis", $nombreexamen,$rut,$idcentrosoli,$fechamuestra,$fecharecepcion);
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }
            
        }*/
        $result = mysqli_query($this->db, $query);

        if ($result) {
            return $result;
        } else {
            return "Error: " . mysqli_error($this->db);
        }
    }

    public function obtenerCentrosmedicos()
    {
        $query = "SELECT * FROM centrosmedicos";
        $result = mysqli_query($this->db, $query);
        
        if ($result) {
            return $result;
        } else {
            return "Error: " . mysqli_error($this->db);
        }
    }
    public function obtenerDomicilioPaciente($rut) {
        $query = "SELECT DomicilioPaciente FROM pacientes WHERE RutPaciente = '$rut'";
        $result = mysqli_query($this->db, $query);

        if ($result) {
            $row = mysqli_fetch_row($result);
            return $row[0]; 
        } else {
            return "Error: " . mysqli_error($this->db);
        }
    }

    public function actualizarDomicilioPaciente($rut, $nuevoDomicilio) {
        $nuevoDomicilio = mysqli_real_escape_string($this->db, $nuevoDomicilio);

        $query = "UPDATE pacientes SET DomicilioPaciente = '$nuevoDomicilio' WHERE RutPaciente = '$rut'";
        mysqli_query($this->db, $query);

        if (mysqli_error($this->db)) {
            echo "Error al actualizar domicilio: " . mysqli_error($this->db);
        }
    }
    /*public function insertarFechaRecepcion($fecharecepcion) {
        $query = "INSERT INTO examenes (FechaRecepcion) VALUES (NOW())";
        $fecharecepcion = mysqli_real_escape_string($this->db, $fecharecepcion);
        mysqli_query($this->db, $query);
    
        if (mysqli_error($this->db)) {
            echo "Error al insertar la fecha: " . mysqli_error($this->db);
        } else {
            echo "Fecha actual insertada correctamente";
        }
    }
    */
}
?>