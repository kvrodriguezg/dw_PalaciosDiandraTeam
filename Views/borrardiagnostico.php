<?php
include '../Models/conex.php';
//OBTENER EL ID ENVIADO DEL MANTENEDOR 
$idRegistro = $_GET['IDDiagnosticos'];

$query = "SELECT * FROM diagnosticos where IDDiagnosticos='" . $idRegistro . "'";
$diagnos = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
$fila = mysqli_fetch_assoc($diagnos);

if (isset($_POST['borrarRegistro'])) {
    $query = "DELETE FROM diagnosticos where IDDiagnosticos='" . $idRegistro . "'";

    if (!mysqli_query($conexion, $query)) {
        die('Error: ' . mysqli_error($conexion));
        echo '<div class="alert alert-danger d-flex aling-items-center" role="alert">No se Pudo Borrar el Registro</div>';
    } else {
        echo '<script language="javascript">alert("juas");</script>';
        header('Location:../Views/mantenedordiagnostico.php');
        exit();
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/svg+xml" href="~/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>editar usuarios</title>
</head>

<body>
    <header class="navbar navbar-light fixed-top" style="background-color: #9CD0FE;">
        <?php
        include("menuadministrador.php");
        ?>
    </header>
    <br><br>


    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" class="form" style="padding: 100px 300px 0 300px;">
        <h2 style="text-align: center;">Borrar Diagnóstico</h2><br>
        <div class="row">
            <div class="col">
                <label for="rut" style="text-align: center;">Código</label>
                <input type="text" class="form-control" name="codigo" value="<?php echo $fila['Codigo']; ?>" readonly>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <label for="rut">Diagnostico</label>
                <td>
                    <select class="form-select" style="width: 100%" aria-label="Default select example" id="estado" name="diagnostico" value="<?php echo $fila['Diagnostico']; ?>" readonly>
                        <option>- POR DIAGNOSTICAR</option>
                        <option>A - NEGATIVO</option>
                        <option>B - MUESTRA INADECUADA, <br>VOLVER A TOMAR</option>
                        <option>C - MUESTRA PRESENTA INFECCION</option>
                        <option>D - POSIBLE ADENOCARCINOMA</option>
                        <option>E - CANCER EPIDERMOIDE</option>
                        <option>F - MUESTRA ATROFICA</option>
                    </select>
                </td>

            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <label for="materno" style="text-align: center;">Descripción</label>
                <input type="text" class="form-control" name="descripcion" value="<?php echo $fila['Descripcion']; ?>" readonly>
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-danger w-100 center-block" name="borrarRegistro">Borrar</button>
    </form>


    <script src="https://kit.fontawesome.com/4652dbea50.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>