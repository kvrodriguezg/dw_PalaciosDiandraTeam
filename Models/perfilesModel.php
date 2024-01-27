<?php

class perfiles
{
    private $db;
    private $perfiles;
    public function __construct()
    {
        require_once("conexion.php");
        $this->db = Conectarse();
        $this->perfiles = array();
    }


    //esta funcion ayudara a insertar los perfiles ya definidos en cuanto se cree la tabla
    public function crearperfiles()
    {
        require_once("existetablaModel.php");
        $tablaExistente = new existetabla();
        if ($tablaExistente->comprobarTabla("perfiles") == true) {
            $query = "INSERT INTO perfiles (idPerfil, TipoPerfil) VALUES (1, 'Administrador'),(2, 'Recepcionista'),(3, 'Tecnico Tincion'),(4, 'Tecnico Diagnostico'),(5, 'Tecnico Registro'),(6, 'Centro medico');";
            $creacion = mysqli_query($this->db, $query);
            if (!$creacion) {
                echo "Error al crear la tabla Perfiles: " . mysqli_error($this->db);
            }
            return true;
        } else {
            return false;
        }

    }
    
    public function insertarPerfil($nombrePerfil)
    {
        require_once("existetablaModel.php");
        $tablaExistente = new existetabla();
        if ($tablaExistente->comprobarTabla("perfiles") == true) {

            $query = "INSERT INTO perfiles (TipoPerfil) VALUES (?);";
            
            if ($stmt = mysqli_prepare($this->db, $query)) {
                mysqli_stmt_bind_param($stmt, "s", $nombrePerfil);
                if (mysqli_stmt_execute($stmt)) {
                    return true;       
                } else {
                    return false;
                }
            }
        }
    }

    public function eliminarPerfil($idPerfil){
        $query="DELETE FROM perfiles WHERE idPerfil=?;";
        if ($stmt = mysqli_prepare($this->db, $query)) {
            mysqli_stmt_bind_param($stmt, "s", $idPerfil);
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }

        }
    }
    public function modificarPerfil($idperfil, $nombrePerfil)
    {
        $query = "UPDATE perfiles SET TipoPerfil = ? WHERE IDPerfil = ?;"; // LA CONSULTA QUE QUIERO EJECUTAR
        if ($stmt = mysqli_prepare($this->db, $query)) { // LE AVISO AL EDITOR QUE LE ENVIARE UNA CONSULTA PREPARADA
            mysqli_stmt_bind_param($stmt, "si", $nombrePerfil, $idperfil); // LE INDICO A LA CONSULTA PREPARADA STMT 
                                                                                //QUE DATOS NECESITO QUE VALIDE
            if (mysqli_stmt_execute($stmt)) { //EJECUTO LA CONSULTA PREPARADA YA CON LOS DATOS QUE LE ENVIE
                return true; //SI TODO VA BIEN, SE EJECUTA Y RETORNA TRUE
            } else {
                return false; // SI HAY ALGO RARO EN LA CONSULTA RETORNA FALSE
            }
        }
    }
    
    

    public function verPerfiles(){
        $consulta = mysqli_query($this->db, "select * from perfiles");
        while ($filas = mysqli_fetch_array($consulta)) {
            $this->perfiles[] = $filas;
        }
        return $this->perfiles;
    }

    public function buscarPerfil($idPerfil) {
        $consulta = "SELECT TipoPerfil FROM perfiles WHERE idPerfil = ?";
        if ($stmt = mysqli_prepare($this->db, $consulta)) {
            mysqli_stmt_bind_param($stmt, "i", $idPerfil); 
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $tipoPerfil); 
                mysqli_stmt_fetch($stmt);    
                return $tipoPerfil;
            } else {               
                return false;
            }
        } else {
            return false;
        }
    }
    

}
