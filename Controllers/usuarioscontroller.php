<?php
include("../Models/usuarioModel.php");
$objusuario = new usuario();
$listusuarios = $objusuario->verUsuarios();


if (isset($_POST['op']) && $_POST['op'] == "GUARDAR" && isset($_POST['nombre'])&& isset($_POST['rut'])&& isset($_POST['usuario'])&& isset($_POST['clave'])&& isset($_POST['correo'])&& isset($_POST['perfil'])&& isset($_POST['centro'])) {
    echo "<script>alert('llogo al controller')</script>";
    $nombre = $_POST['nombre'] ?? '';
    $rut = $_POST['rut'] ?? '';
    $usuario = $_POST['usuario'] ?? '';
    $clave = $_POST['clave'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $perfil = $_POST['perfil'] ?? '';
    $centro = $_POST['centro'] ?? '';
    $op = $_POST['op'] ?? '';
    $insertar = $objusuario->insertarUsuario($usuario,$nombre,$correo, $rut, $clave, $perfil, $centro);
   header("Location: mantenedorusuarios.php");
    exit();
}


   // Eliminar perfil 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['op']) && $_POST['op'] == "eliminar" && isset($_POST['IDUsuario'])) {
    $IDUsuario = $_POST['IDUsuario'];
    $borrarPerfil = $objusuario->eliminarUsuario($IDUsuario);
        header("Location: mantenedorusuarios.php"); 
}


if (isset($_POST['op']) && $_POST['op'] == "Modificar" && isset($_POST['IDUsuario']) && isset($_POST['nombre'])&& isset($_POST['rut'])&& isset($_POST['usuario'])&& isset($_POST['clave'])&& isset($_POST['correo'])&& isset($_POST['perfil'])&& isset($_POST['centro'])) {
    echo "<script>alert('llogo al controller')</script>";
    $IDUsuario = $_POST['IDUsuario'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $rut = $_POST['rut'] ?? '';
    $usuario = $_POST['usuario'] ?? '';
    $clave = $_POST['clave'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $perfil = $_POST['perfil'] ?? '';
    $centro = $_POST['centro'] ?? '';
    $op = $_POST['op'] ?? '';
    $insertar = $objusuario->modificarPerfil($IDUsuario,$usuario,$nombre,$correo, $rut, $clave, $perfil, $centro);
    //header("Location: mantenedorusuarios.php");
    exit();
}