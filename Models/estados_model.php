<?php

class Estados
{
    private $db;
    private $Estados;
    public function __construct()
    {
        require_once("conexion.php");
        $this->db = Conectarse();
        $this->Estados = array();
    }

    public function InsertaEstado($nuevoEstado,$nuevoPerfil)
    {
        $consulta="insert into estados (NombreEstado, Perfil) values (?,?)";
        if ($stmt = mysqli_prepare($this->db, $consulta)) {
            mysqli_stmt_bind_param($stmt, "ss", $nuevoEstado,$nuevoPerfil);
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }
        }

    }

    public function MostrarEstados()
    {
        $consulta=mysqli_query($this->db,"select * from estados");
        while ($filas = mysqli_fetch_assoc($consulta)) {
            $this->estados[] = $filas;
        }
        return $this->estados;
    }

 

    public function ModificarEstado($nuevoEstado,$nuevoPerfil,$idEstados)
    {
        
        $consulta="update estados set NombreEstado=?, Perfil=? where IDEstado=?";
        if ($stmt = mysqli_prepare($this->db, $consulta)) {
            mysqli_stmt_bind_param($stmt, "ssi", $nuevoEstado,$nuevoPerfil,$idEstados);
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }

        }

    }

    public function EliminaEstado($idEstado)
    {
        $ordenEliminar="delete from Estados where IDEstado=?;";
        if ($stmt = mysqli_prepare($this->db, $ordenEliminar)) {
            mysqli_stmt_bind_param($stmt, "s", $idEstado);
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }

        }
    }

}
    ?>