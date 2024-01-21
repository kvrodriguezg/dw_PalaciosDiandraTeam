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
    include("menu.php");
    ?>
</header>
<br><br>

<body class="container">
    <section style="margin: 10px;" class="centro">
        <h2 class="titulo">Laboratorio Megaman</h2><br><br>
        <table id="tableUsers" class="tabla table">
            <style>
                .tabla {
                    width: 100%;
                }

                .centro {
                    padding-top: 100px;
                }

                .titulo {
                    text-align: center;
                }
            </style>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Rut</th>
                    <th>Fecha de Toma</th>
                    <th>Fecha de orden</th>
                    <th>Nombre de Examne</th>
                    <th>Estado</th>
                    <th>Ver</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>

                <tr class="table table-striped">
                    <td>Alexis Tobar</td>
                    <td>17426433-3</td>
                    <td>12-12-2024</td>
                    <td>12-12-2024</td>
                    <td>glicemia</td>
                    <td>Pendiente</td>
                    <td>
                        <a href="" class="btn w-100 m-1 btn-primary">Ver Diagnostico</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>Alexis Tobar</td>
                    <td>17426433-3</td>
                    <td>12-12-2024</td>
                    <td>12-12-2024</td>
                    <td>glicemia</td>
                    <td>Pendiente</td>
                    <td>
                        <a href="" class="btn w-100 m-1 btn-primary">Ver Diagnostico</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>Alexis Tobar</td>
                    <td>17426433-3</td>
                    <td>12-12-2024</td>
                    <td>12-12-2024</td>
                    <td>glicemia</td>
                    <td>Pendiente</td>
                    <td>
                        <a href="" class="btn w-100 m-1 btn-primary">Ver Diagnostico</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>Alexis Tobar</td>
                    <td>17426433-3</td>
                    <td>12-12-2024</td>
                    <td>12-12-2024</td>
                    <td>glicemia</td>
                    <td>Pendiente</td>
                    <td>
                        <a href="" class="btn w-100 m-1 btn-primary">Ver Diagnostico</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>Alexis Tobar</td>
                    <td>17426433-3</td>
                    <td>12-12-2024</td>
                    <td>12-12-2024</td>
                    <td>glicemia</td>
                    <td>Pendiente</td>
                    <td>
                        <a href="" class="btn w-100 m-1 btn-primary">Ver Diagnostico</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </section>
    <script src="https://kit.fontawesome.com/4652dbea50.js" crossorigin="anonymous"></script>
</body>

</html>