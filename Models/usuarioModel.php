<?php
class usuarios
{
	private $db;
	private $usuario;

    public function __construct()
	{
        require_once("conexion.php");
        $this->db = Conectarse();
		$this ->usuario=array();
	}

    public function verUsuarios(){
        $consulta = mysqli_query($this->db, "select * from usuarios");
        while ($filas = mysqli_fetch_array($consulta)) {
            $this->usuario[] = $filas;
        }
        return $this->usuario;
    }
}



?>