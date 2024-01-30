<?php
require_once("../Controllers/centroController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <title>Tutorial DataTables</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../css/prueba.css">
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css" />
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <header>
        <h2 class="titulo">Centro Medico</h2><br><br>
    </header>
    <div style="height: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg.12">
                    <table id="pruebas" class="table table-striped table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Rut</th>
                                <th>Fecha de Toma</th>
                                <th>Fecha de orden</th>
                                <th>Nombre de Examne</th>
                                <th>Estado</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alexis Tobar</td>
                                <td>17426433-3</td>
                                <td>12-12-2024</td>
                                <td>12-12-2024</td>
                                <td>glicemia</td>
                                <td>Pendiente</td>
                            </tr>
                            <tr>
                                <td>Agustin Tobar</td>
                                <td>17426433-3</td>
                                <td>12-12-2024</td>
                                <td>12-12-2024</td>
                                <td>glicemia</td>
                                <td>Pendiente</td>
                            </tr>
                            <tr>
                                <td>Alonso Tobar</td>
                                <td>17426433-3</td>
                                <td>12-12-2024</td>
                                <td>12-12-2024</td>
                                <td>glicemia</td>
                                <td>Pendiente</td>

                            </tr>
                            <tr>
                                <td>Pedro Tobar</td>
                                <td>17426433-3</td>
                                <td>12-12-2024</td>
                                <td>12-12-2024</td>
                                <td>glicemia</td>
                                <td>Pendiente</td>
                            </tr>
                            <tr>
                                <td>Alfonso Tobar</td>
                                <td>17426433-3</td>
                                <td>12-12-2024</td>
                                <td>12-12-2024</td>
                                <td>glicemia</td>
                                <td>Pendiente</td>
                            </tr>
                            <tr>
                                <td>Ariel Tobar</td>
                                <td>17426433-3</td>
                                <td>12-12-2024</td>
                                <td>12-12-2024</td>
                                <td>glicemia</td>
                                <td>Pendiente</td>
                            </tr>
                            <tr>
                                <td>Andres Tobar</td>
                                <td>17426433-3</td>
                                <td>12-12-2024</td>
                                <td>12-12-2024</td>
                                <td>glicemia</td>
                                <td>Pendiente</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>

    <!-- para usar botones en datatables JS -->
    <script src="../datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="../datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>

    <!-- código JS propìo-->
    <script type="text/javascript" src="../js/data.js"></script>

</body>

</html>