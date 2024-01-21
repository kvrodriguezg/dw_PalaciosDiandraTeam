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

    <title>Ingreso Examen</title>
</head>

<body>
    <header class="navbar navbar-light fixed-top" style="background-color: #9CD0FE;">
        <?php
        include("menurecepcionista.php");
        ?>
    </header>
    <br><br><br><br><br>
    <h2 style="text-align: center;">Ingresar nueva orden</h2>
    <form method="POST" class="form" style="padding: 100px 300px 0 300px;">


        <div class="row">
            <div class="col">
                <label for="nombrePaciente">Nombre Paciente</label>
                <input type="text" class="form-control" name="nombrePaciente">
            </div>
            <div class="col">
                <label for="rut">Rut</label>
                <input type="text" class="form-control" name="rut">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <label for="domicilio">Domicilio</label>
                <input type="text" class="form-control" name="domicilio">
            </div>
            <div class="col">
                <label for="clave">Seleccionar Laboratorio</label>
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Laboratorios
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">MEGAMAN código MM</a>
                        <a class="dropdown-item" href="#">ULTRAMAN código UM</a>
                        <a class="dropdown-item" href="#">ULTRASEVEN código US</a>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <label for="nombreExamen">Nombre Examen</label>
                <input type="text" class="form-control" name="nombreExamen">
            </div>
            <div class="col">
                <label for="fechaTomaMuestra">Fecha de Toma de Muestra</label>
                <input type="date" class="form-control" name="fechaTomaMuestra">
            </div>
        </div>

        <br>



        <br>

        <button type="submit" class="btn btn-primary w-100 center-block" name="crearRegistro">Registrar</button>
    </form>
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