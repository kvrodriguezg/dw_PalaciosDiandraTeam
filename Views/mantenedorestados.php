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
    <h1>Listado de Estados</h1><br>
    <a href="crearestado.php" class="btn  btn-primary">Crear Estados</a>
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
                    <th>IDDiagnóstico</th>
                    <th>Estado </th>
                    <th>Perfil </th>
                    <th>Acción </th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>1</td>
                    <td>Recepcionado </td>
                    <td>recepcionista</td>
                    <td>
                        <a href="editarestado.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                    <td>


                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>2</td>
                    <td>Listo para diagnóstico </td>
                    <td>Tinción</td>
                    <td>
                        <a href="editarestado.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                    <td>


                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>3</td>
                    <td>Realizado </td>
                    <td>área de diagnóstico</td>
                    <td>
                        <a href="editarestado.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>4</td>
                    <td>Completado  </td>
                    <td>registro</td>
                    <td>
                        <a href="editarestado.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>5</td>
                    <td>Pendiente </td>
                    <td>N/A</td>
                    <td>
                        <a href="editarestado.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                </tr>

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