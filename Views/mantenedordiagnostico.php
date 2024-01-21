<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/svg+xml" href="~/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    <title>Document</title>
</head>

<header class="navbar navbar-light fixed-top" style="background-color: #9CD0FE;">
<?php
include("menuadministrador.php");
?>
    </header>
    <body class="container">
<br><br><br><br><br>

<h1>Listado de Diagnosticos</h1><br>
<a href="creardiagnostico.php" class="btn  btn-primary">Crear Diagnóstico</a>
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
            <th>Código </th>
            <th>Diagnóstico  </th>
            <th>Descripción </th>
        </tr>
        </thead>
        <tbody>
            <tr class="table table-striped" >
                <td>1</td>
                <td>A</td>
                <td>NEGATIVO</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates in eius debitis porro voluptas amet neque quam enim aperiam, suscipit tenetur rem facilis aut! Non veritatis aliquid fugiat aliquam earum?</td>
                <td>
                <a href="editardiagnostico.php" class="btn w-100 m-1 btn-primary">editar</a>
                <a href="" class="btn w-100 m-1 btn-danger">borrar</a>
                </td>
                <td>
    
    
                </td>
            </tr>
            <tr class="table table-striped" >
            <td>2</td>
                <td>B</td>
                <td>MUESTRA INADECUADA, VOLVER A TOMAR</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates in eius debitis porro voluptas amet neque quam enim aperiam, suscipit tenetur rem facilis aut! Non veritatis aliquid fugiat aliquam earum?</td>
                <td>
                <a href="editar.php" class="btn w-100 m-1 btn-primary">editar</a>
                <a href="" class="btn w-100 m-1 btn-danger">borrar</a>
                </td>
                <td>
    
    
                </td>
            </tr>
            <tr class="table table-striped" >
            <td>1</td>
                <td>C</td>
                <td>LA MUESTRA PRESENTA INFECCIÓN</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates in eius debitis porro voluptas amet neque quam enim aperiam, suscipit tenetur rem facilis aut! Non veritatis aliquid fugiat aliquam earum?</td>
                <td>
                <a href="editar.php" class="btn w-100 m-1 btn-primary">editar</a>
                <a href="" class="btn w-100 m-1 btn-danger">borrar</a>
                </td>
                <td>
    
    
                </td>
            </tr>
        </tbody>
    </table>
</section>



<script src="https://kit.fontawesome.com/4652dbea50.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>