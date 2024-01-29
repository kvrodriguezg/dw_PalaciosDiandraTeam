<?php
session_start();

function verificarAcceso($perfilesPermitidos) {
    // Verificar si el usuario ha iniciado sesión
    if (!isset($_SESSION['idPerfil'])) {
        header('Location: login.php');
        exit();
    }

    // Obtener el ID de perfil del usuario desde la sesión
    $idperfil = $_SESSION['idPerfil'];

    // Verificar si el ID de perfil está en la lista de perfiles permitidos
    if ($idperfil != $perfilesPermitidos) {
        // Si el ID de perfil no coincide, redirigir a la página de inicio de sesión
        header('Location: login.php');
        exit();
    }
}
?>
