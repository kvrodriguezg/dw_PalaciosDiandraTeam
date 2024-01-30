<?php
require_once("../Controllers/usuariosController.php");
//require_once('../Controllers/accesoController.php');
//$perfilesPermitidos = 5;
//verificarAcceso($perfilesPermitidos);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_POST['IDUsuario'])) {
        $IDUsuario = '';
    } else {
        $IDUsuario = $_POST['IDUsuario'];
    }
    if (!isset($_POST['op'])) {
        $op = '';
    } else {
        $op = $_POST['op'];
    }

    if ($op == 'EDITAR') {
        header("Location: editarusuario.php?IDUsuario=$IDUsuario");
        exit();
    } 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/svg+xml" href="~/favicon.ico" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Document</title>
</head>

<header class="navbar navbar-light fixed-top" style="background-color: #9CD0FE;">
    <?php
    include("menuadministrador.php");
    ?>
</header>
<br><br><br><br><br>

<body class="container">
    <h1>Listado de Usuarios</h1><br>
    <?php
    echo '
        <nav class="nav">
        <ul class="nav">
        <div class="m-1">
            <form method="post" action="creacionusuarios.php">
                <input type="hidden" name="crearPerfiles" value="crear">
                <button class="btn w-100 m-1 btn-primary btn-sm ">Insertar usuarios</button>
            </form>
        </div>
    </ul>
    </nav>';
    ?>

    <br><br><br>
    <section style="margin: 10px;">
        <table id="tableUsers" class="tabla table">
            <style>
                .tabla {
                    width: 100%;
                }
            </style>
            <thead>
                <tr>
                    <th>IDUsuario</th>
                    <th>usuario </th>
                    <th>Nombre Completo</th>
                    <th>correo </th>
                    <th>Rut </th>
                    <th>Clave </th>
                    <th>Perfil</th>
                    <th>Centro Medico</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listusuarios as $usu) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $usu['IDUsuario']; ?>
                        </td>
                        <td>
                            <?php echo $usu['usuario']; ?>
                        </td>
                        <td>
                            <?php echo $usu['Nombre']; ?>
                        </td>
                        <td>
                            <?php echo $usu['Correo']; ?>
                        </td>
                        <td>
                            <?php echo $usu['Rut']; ?>
                        </td>
                        <td>
                            <?php echo $usu['Clave']; ?>
                        </td>
                        <td>
                            <?php
                            $perfil = $objusuario->buscarPerfilId($usu['IDPerfil']);
                            echo $perfil['TipoPerfil'];
                            ?>
                        </td>
                        <td>
                            <?php $centro = $objusuario->buscarcentroID($usu['IDCentroMedico']);
                            echo $centro['NombreCentro'] ?? '';
                            ?>
                        </td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="op" value="EDITAR">
                                <input type="hidden" name="IDUsuario" value="<?php echo $usu['IDUsuario'] ?>">
                                <button type="submit" class="btn w-100 center-block btn-primary">EDITAR</button>
                            </form>
                        </td>
                        <td class="text-center">
                            <form method="POST" action="" id="eliminarForm">
                                <input type="hidden" name="op" id="op" value="">
                                <input type="hidden" name="IDUsuario" value="<?php echo $usu['IDUsuario']; ?>">
                                <button type="button" class="btn btn-danger" onclick="confirmarYEliminar('<?php echo $usu['IDUsuario']; ?>')">ELIMINAR</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

    </section>
    <script src="https://kit.fontawesome.com/4652dbea50.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>

<script>
    function confirmarYEliminar(IDUsuario) {
        var confirmacion = confirm("¿Estás seguro de que deseas eliminar este usuario?");
        if (confirmacion) {
            var opField = document.getElementById('op');
            opField.value = "eliminar";
            console.log("Valor del campo op:", opField.value);
            document.getElementById('eliminarForm').submit();
        }
    }
</script>