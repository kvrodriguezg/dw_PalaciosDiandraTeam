<?php
class usuario
{
    private $db;
    private $usuario;
    private $user;
    private $userLogin;

    
    private $centrosarray;

    public function __construct()
    {
        require_once("conexion.php");
        $this->db = Conectarse();
        $this->usuario = array();
        $this->user = array();
       $this->userLogin = array();
       $this->centrosarray = array();
    }

    public function verUsuarios()
    {
        $consulta = mysqli_query($this->db, "SELECT * FROM usuarios");
        while ($filas = mysqli_fetch_array($consulta)) {
            $this->usuario[] = $filas;
        }
        return $this->usuario;
    }

    public function buscarPerfil($nombrePerfil)
    {
        $consulta = mysqli_query($this->db, "SELECT IDPerfil FROM perfiles WHERE TipoPerfil = '$nombrePerfil'");
        $idperfil = mysqli_fetch_array($consulta);
        return $idperfil;
    }

    public function buscarcentro($nombreCentro)
    {
        $consulta = mysqli_query($this->db, "SELECT IDCentroMedico FROM centrosmedicos WHERE NombreCentro = '$nombreCentro'");
        $idcentro = mysqli_fetch_array($consulta);
        return $idcentro;
    }

    public function verCentrosarray(){
        $consulta = mysqli_query($this->db, "select NombreCentro from centrosmedicos;");
        while ($filas = mysqli_fetch_array($consulta)) {
            $this->centrosarray[] = $filas;
        }
        return $this->centrosarray;
    }
    public function insertarUsuario($usuario,$nombre,  $correo, $rut, $clave, $perfil, $centro)
    {
        $idperfil = $this->buscarPerfil($perfil);
        $idcentro = $this->buscarcentro($centro);
        $clavehash= password_hash($clave, PASSWORD_DEFAULT);

        require_once("existetablaModel.php");
        $tablaExistente = new existetabla();
        if ($tablaExistente->comprobarTabla("perfiles") == true) {
            $query = "INSERT INTO usuarios (usuario,Nombre, Correo, Rut, Clave, IDPerfil, IDCentroMedico) VALUES (?, ?, ?, ?, ?, ?,?);";

            if ($stmt = mysqli_prepare($this->db, $query)) {
                mysqli_stmt_bind_param($stmt, "sssssii", $usuario, $nombre, $correo, $rut, $clavehash, $idperfil['IDPerfil'], $idcentro['IDCentroMedico']);

                if (mysqli_stmt_execute($stmt)) {
                    return true;
                } else {
                    return "Fallo la query. Error: " . mysqli_stmt_error($stmt);
                }
            }
        }
    }

    public function eliminarUsuario($IDUsuario)
    {
        $query = "DELETE FROM usuarios WHERE IDUsuario=?;";
        if ($stmt = mysqli_prepare($this->db, $query)) {
            mysqli_stmt_bind_param($stmt, "i", $IDUsuario);
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }
        }

    }

    public function buscarUsuario($IDUsuario){
        $consulta = mysqli_query($this->db, "SELECT * FROM usuarios where IDUsuario=$IDUsuario");
        while ($filas = mysqli_fetch_array($consulta)) {
            $this->user[] = $filas;
        }
        return $this->user;
    }

    public function buscarPerfilId($IDPerfil)
    {
        $consulta = mysqli_query($this->db, "SELECT TipoPerfil FROM perfiles WHERE IDPerfil = $IDPerfil");
        $TipoPerfil = mysqli_fetch_array($consulta);
        return $TipoPerfil;
    }

    public function buscarcentroID($IDCentroMedico)
    {
        $consulta = mysqli_query($this->db, "SELECT NombreCentro FROM centrosmedicos WHERE  IDCentroMedico = '$IDCentroMedico'");
        $NombreCentro = mysqli_fetch_array($consulta);
        return $NombreCentro;
    }

    public function modificarPerfil($IDUsuario,$usuario,$nombre,$correo, $rut, $clave, $perfil, $centro)
    {

        $idperfil = $this->buscarPerfil($perfil);
        $idcentro = $this->buscarcentro($centro);

        $query = "UPDATE usuarios SET usuario = ?,Nombre = ?, Correo = ?, Rut = ?, Clave = ?, IDPerfil = ?, IDCentroMedico = ? WHERE IDUsuario = ?;";
        if ($stmt = mysqli_prepare($this->db, $query)) { 
            mysqli_stmt_bind_param($stmt, "sssssiii",$usuario,$nombre,$correo, $rut, $clave, $idperfil['IDPerfil'], $idcentro['IDCentroMedico'],$IDUsuario); 
                                                                                
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return "Fallo la query. Error: " . mysqli_stmt_error($stmt);
            }
        }
    }

    function iniciarSesion($usuario, $clave) {
        $link = Conectarse();
    
        $query = mysqli_prepare($link, "SELECT usuario, Clave, idPerfil, IDCentroMedico FROM usuarios WHERE usuario = ?");
    
        if ($query) {
            mysqli_stmt_bind_param($query, "s", $usuario);
            mysqli_stmt_execute($query);
            mysqli_stmt_bind_result($query, $resultadoUsuario, $resultadoClave, $idPerfil, $IDCentroMedico);
            mysqli_stmt_fetch($query);
            mysqli_stmt_close($query);
    
            if ($resultadoUsuario === $usuario && password_verify($clave, $resultadoClave)) {
                return array('idPerfil' => $idPerfil, 'IDCentroMedico' => $IDCentroMedico);
            }
        } else {
            return false;
        }
    }
    
    
}