<?php

class centromedico{
    private $id;
    private $nombreCentro;
    private $codigo;
    private $centros;
    private $db;
    public function __construct()
    {
        require_once("conexion.php");
        $this->db = Conectarse();
        $this->centros = array();
    }

    public function crearCentros(){
        require_once("existetablaModel.php");
        $tablaExistente = new existetabla();
        if ($tablaExistente->comprobarTabla("CentrosMedicos") == true) {
            $query = "INSERT INTO centrosmedicos (NombreCentro, codigo) VALUES ('MEGAMAN', 'MM'),('ULTRAMAN', 'UM'),('ULTRASEVEN', 'US');";
            $creacion = mysqli_query($this->db, $query);
            if (!$creacion) {
                echo "Error al crear datos " . mysqli_error($this->db);
            }
            return true;
        } else {
            return false;
        }
    }

    public function verCentros(){
        $consulta = mysqli_query($this->db, "select * from centrosmedicos;");
        while ($filas = mysqli_fetch_array($consulta)) {
            $this->centros[] = $filas;
        }
        return $this->centros;
    }





    public function insertarCentro($nombreCentro,$CodigoCentro)
    {
        require_once("existetablaModel.php");
        $tablaExistente = new existetabla();
        if ($tablaExistente->comprobarTabla("CentrosMedicos") == true) {

            $query = "INSERT INTO centrosmedicos (NombreCentro, codigo)  VALUES (?,?);";
            
            if ($stmt = mysqli_prepare($this->db, $query)) {
                mysqli_stmt_bind_param($stmt, "ss", $nombreCentro,$CodigoCentro);
                if (mysqli_stmt_execute($stmt)) {
                    return true;
                    
                } else {
                    return false;
                }

            }

        }
    }

    public function modificarCentro($IDCentroMedico,$NombreCentro,$codigo)
    {
        $query = "UPDATE centrosmedicos SET NombreCentro = ?, codigo = ? WHERE IDCentroMedico = ?;";
        if ($stmt = mysqli_prepare($this->db, $query)) { 
            mysqli_stmt_bind_param($stmt, "ssi", $NombreCentro, $codigo,$IDCentroMedico ); 
                                                                           
            if (mysqli_stmt_execute($stmt)) { 
                return true; 
            } else {
                return false; 
            }
        }
    }



    public function eliminarCentro($IDCentroMedico){
        $query="DELETE FROM centrosmedicos WHERE IDCentroMedico=?;";
        if ($stmt = mysqli_prepare($this->db, $query)) {
            mysqli_stmt_bind_param($stmt, "i", $IDCentroMedico);
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }

        }
    }




}