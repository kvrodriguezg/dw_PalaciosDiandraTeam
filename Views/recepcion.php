<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/svg+xml" href="~/favicon.ico" />

    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Registro</title>
</head>

<body class="container">
    <header class="navbar navbar-light fixed-top" style="background-color: #9CD0FE;">
        <?php
        include("menurecepcionista.php");
        ?>
    </header>
    <br><br><br><br><br>


    <div class="alinear">
        <form method="POST" class="form">
            <input type="date" name="calendario" required="required">
            <button type="submit" class="btn btn-warning" name="Filtrar">Filtrar</button>
        </form>

        <div class="alinear2">
            <button type="button" class="btn btn-outline-success custom-excel-button"
                onclick="window.open('excelregistro.xlsx', '_blank');">
                <img src="../img/icono_excel_30.png" alt="Icono Excel">
            </button>
        </div>
        <div class="alinear2">
        <a href="ingresoExamen.php" class="btn btn-primary me-2">Ingresar Examen</a>
        </div>

    </div>

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
                        <th>F. Fiagnostico</th>
                        <th>Diagnóstico</th>
                        <th>Cod. Diagnóstico</th>
                        <th>Estado</th>

                    </tr>
                </thead>
                <?php
                for ($i = 0; $i <= 4; $i++) {
                    ?>
                    <tbody>
                        <tr class="table table-striped">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                    </label>
                                </div>
                            </td>
                            <td>Luis Yañez</td>
                            <td>Arturo prat 269</td>
                            <td>ULTRAMAN</td>
                            <td>Glisemia</td>
                            <td>12-12-2024</td>
                            <td>13-12-2024</td>
                            <td>14-12-2024</td>
                            <td>MUESTRA INADECUADA, VOLVER A TOMAR</td>
                            <td>B</td>
                            <td>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn btn-warning dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Seleccionar Estado
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Pendiente</a>
                                            <a class="dropdown-item" href="#">Recepcionado</a>
                                            <a class="dropdown-item" href="#">Listo para Tinción</a>
                                            <a class="dropdown-item" href="#">Listo para Diagnóstico</a>
                                            <a class="dropdown-item" href="#">Realizado</a>
                                        </div>
                                    </div>
                            </td>

                            <td>
                                <button type="button" class="btn btn-outline-danger"
                                    onclick="window.open('generar_pdf.php', '_blank');">
                                    <img src="../img/pdf.png" alt="Icono PDF">
                                </button>


                            </td>
                            <td>
                                <!-- <a href="generar_pdf.php" class="btn w-100 m-1 btn-danger" >Ver PDF</a>  -->
                                <a href="#s" class="btn w-100 m-1 btn-primary">Enviar</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                }
                ?>
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