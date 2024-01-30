<?php 
require_once("../Controllers/examenesController.php");
require_once('../Controllers/accesoController.php');

$perfilesPermitidos = (4);
verificarAcceso($perfilesPermitidos);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/svg+xml" href="~/favicon.ico" />
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Registro</title>
</head>

<body class="container">
    <header class="navbar navbar-light fixed-top" style="background-color: #9CD0FE;">
        <?php
        include("menu.php");
        ?>
    </header>
    <br><br><br><br><br>
    <div>
        <h2 class="titulo">Registro de Solicitudes</h2>
    </div>

    <div class="alinear">
        <form method="POST" class="form">
            <input type="date" name="calendario" required="required">
            <button type="submit" class="btn btn-warning" name="Filtrar">Filtrar</button>
        </form>

        <div class="alinear2">
            <button type="button" class="btn btn-outline-success custom-excel-button" onclick="window.open('excelregistro.xlsx', '_blank');">
                <img src="../img/icono_excel_30.png" alt="Icono Excel">
            </button>
        </div>
    </div>
    <br>


    <section>
        <table id="tableUsers" class="tabla table">
            <thead>
                <tr>
                    <th>Seleccionar</th>
                    <th>Nombre Paciente</th>
                    <th>Domicilio</th>
                    <th>Laboratorio</th>
                    <th>Examen</th>
                    <th>F. Toma de Muestra</th>
                    <th>F. de Tinción</th>
                    <th>F. Diagnóstico</th>
                    <th>Diagnóstico</th>
                    <th>Cod. Diagnóstico</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($examenesRegistro)) { ?>
                    <tr class="table table-striped">
                        <form method="post" action="Registro.php">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                    </label>
                                </div>
                            </td>
                            <td><?php echo $examen->obtenerNombrePaciente($row['RutPaciente']) ?></td>
                            <td><?php echo $examen->obtenerDomicilioPaciente($row['RutPaciente']) ?></td>
                            <td><?php echo $examen->obtenerCentroMedico($row['IDCentroSolicitante']) ?></td>
                            <td><?php echo $row['NombreExamen'] ?></td>
                            <td><?php echo $row['FechaTomaMuestra'] ?></td>
                            <td><?php echo $row['Fechatincion'] ?></td>
                            <td><?php echo $row['Fechadiagnostico'] ?></td>
                            <td><?php echo $examen->obtenerDiagnostico($row['CodigoDiagnosticos']); ?></td>
                            <td><?php echo $row['CodigoDiagnosticos']; ?></td>
                            <td><?php echo $examen->obtenerEstadoActual($row['IDEstado']); ?></td>

                            <?php /*<td>
                                <select class="form-select" style="width: 150px" name="estado" required>
                                    <?php
                                    $resultadoEstados = $examen->obtenerEstados('recepcion');

                                    while ($row1 = mysqli_fetch_array($resultadoEstados)) {
                                        echo '<option value="' . $row1['IDEstado'] . '">' . $row1['NombreEstado'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>*/?>

                            <td>


                            <button type="button" class="btn btn-outline-danger" 
                                onclick="window.open('generar_pdf.php?id=<?php echo $row['IDExamen']; ?>', '_blank');">
                                <img src="../img/pdf.png" alt="Icono PDF">
                            </button>
                            <?Php
                            // echo $row['IDExamen'];


                            ?> 
                            


                            </td>
                            <td>
                                <!-- <a href="generar_pdf.php" class="btn w-100 m-1 btn-danger" >Ver PDF</a>  -->
                                <input type="hidden" name="idExamen" value=<?php echo $row['IDExamen'] ?>>
                                <input name="actualizarEstado" type="submit" class="btn w-100 m-1 btn-primary"></input>
                                <input name="eliminarRegistro" type="submit" class="btn w-100 m-1 btn-danger" value="eliminar"></input>
                            </td>
                        </form>
                    </tr>

            </tbody>

        <?php } ?>
        </table>
    </section>
</body>

<script src="https://kit.fontawesome.com/4652dbea50.js" crossorigin="anonymous"></script>

</html>

<script src="https://kit.fontawesome.com/4652dbea50.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>