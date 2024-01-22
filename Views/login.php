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
<body>

<header class="navbar navbar-light fixed-top" style="background-color: #9CD0FE;">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
            <img src="../img/logo_labmuest.png" alt="" width="110" height="35">
            </a>
            <nav class="nav">
                <ul class="nav">
                <li class="nav-item">
                        <a class="nav-link text-blue" href="recepcion.php"><i class="fa-solid fa-receipt"></i> Recepción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href="tincion.php"><i class="fa-solid fa-bacteria"></i> Tinción</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-blue" href="diagnostico.php"><i class="fa-solid fa-user"></i> Diagnosticos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href="Registro.php"><i class="fa-solid fa-receipt"></i> Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href="centro_medico.php"><i class="fa-solid fa-house-chimney-medical"></i> Centro Médico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href="mantenedorusuarios.php"><i class="fa-solid fa-user"></i> Administrador</a>
                    </li>
                    


                </ul>
            </nav>
        </div>
</header>


<section class="login">
        <style>
            .login{
                padding: 60px 300px 0 300px;
            }
        
            .img-login{
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .form-login{
                padding: 0 100px 0 100px;
            }
        </style>
    <div class="form-signin w-100 m-auto pT-4 ">
    
            <div class="m-0 row justify-content-center align-items-center">
                <div class="col-auto p-5 text-center">
                    <img class="img-login" src="./img/logo_labmuest.png" alt="" width="300" >
                </div>
            </div>
            <h1 style="text-align: center">Iniciar Sesión</h1><br><br>
            <div class="row row-gap-3 form-login" >
           
                <div class="col-12 pb-3 mb-3">
                    <form id="submitLogin" class="row g-3 needs-validation" asp-action="login" asp-controller="Login" method="post" novalidate>
                        
                        <div class="input-group has-validation form-floating">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com" required>
                            <label for="email">Correo</label>
                            <div class="invalid-feedback">
                                por favor ingresar email
                            </div>
                        </div>
                        <div class="input-group has-validation form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                            <label for="Password">Contraseña</label>
                            <div class="invalid-feedback">
                                por favor ingresar contraseña
                            </div>
                        </div>
    
    
    
                        <div class="form-check text-start my-3">
                            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Recuérdame
                            </label>
                        </div>
                        <br />
                        <a href="http://localhost/dwEVA1AlexisTobar/vistas/menu.php" class="btn btn-1 w-100 py-2 btn-warning">Ingresar</a>
                        <br />
                        <br />  
                    </form>
                </div>
            </div>
    </div>
</section>


<script src="https://kit.fontawesome.com/4652dbea50.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>