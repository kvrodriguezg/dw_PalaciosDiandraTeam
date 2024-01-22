<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/svg+xml" href="~/favicon.ico" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Pagina De Inicio</title>
</head>

<body>
    <section class="navbar fixed-top" style="background-color: #0cb9f23c;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./img/logo_labmuest.png" alt="" width="190" height="50">
            </a>
            <nav class="nav">
                <ul class="nav">
                    <div class="m-1">
                        <a href="Views/login.php" class="btn w-100 m-1 btn-primary btn-sm ">Inicio de Sesión</a>
                    </div>
                </ul>
            </nav>
            <?php 
            $validacionExistencia = '';
            if (!$validacionExistencia)
            { echo '
                <nav class="nav">
                <ul class="nav">
                    <div class="m-1">
                        <form method="post" action="../Controllers/indexController.php">
                            <input type="hidden" name="crearTabla" value="crear">
                            <button class="btn w-100 m-1 btn-primary btn-sm ">Crear Tabla</button>
                        </form>
                    </div>
                </ul>
            </nav>';
            }?>
        </div>
        <style>
            .icono {
                color: #f1683a;
            }
        </style>
    </section>
    <section>
        <div class="carousel">
            <!-- list item -->
            <div class="list">
                <div class="item">
                    <img src="./img/foto1.png">
                    <div class="content">
                        <div class="author">LABMUEST</div>
                        <div class="title">LABORATORIO</div>
                        <div class="topic">CLÍNICO</div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/foto2.png">
                    <div class="content">
                        <div class="author">LABMUEST</div>
                        <div class="title">LABORATORIO</div>
                        <div class="topic">CLÍNICO</div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/foto3.jpg">
                    <div class="content">
                        <div class="author">LABMUEST</div>
                        <div class="title">LABORATORIO</div>
                        <div class="topic">CLÍNICO</div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/foto4.png">
                    <div class="content">
                        <div class="author">LABMUEST</div>
                        <div class="title">LABORATORIO</div>
                        <div class="topic">CLÍNICO</div>
                    </div>
                </div>
            </div>
            <!-- list thumnail -->
            <div class="thumbnail">
                <div class="item">
                    <img src="./img/foto1.png">
                    <div class="content">
                        <div class="title">
                            LABORATORIO
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/foto2.png">
                    <div class="content">
                        <div class="title">
                            LABORATORIO
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/foto3.jpg">
                    <div class="content">
                        <div class="title">
                            LABORATORIO
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/foto4.png">
                    <div class="content">
                        <div class="title">
                            LABORATORIO
                        </div>
                    </div>
                </div>
            </div>
            <!-- next prev -->

            <div class="arrows">
                <button id="prev">
                    < </button>
                        <button id="next">></button>
            </div>
            <!-- time running -->
            <div class="time"></div>
        </div>
    </section>

    <section class="clientes contenedor">
        <h2 class="titulo">¿Qué dicen nuestros clientes?</h2>
        <div class="cards">
            <div class="card">
                <img src="./img/profe1.jpeg" alt="">
                <div class="contenido-texto-card">
                    <h4>Luis Yañez</h4>
                    <p>Maravilloso trabajo, muy profesionales en sus servicios de laboratorios.</p>
                </div>
            </div>
            <div class="card">
                <img src="./img/profe2.jpeg" alt="">
                <div class="contenido-texto-card">
                    <h4>Ramon Vasquez</h4>
                    <p>Responsables y compromiso en sus labores, muy atentos con sus clientes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="./img/logo_labmuest.png" alt="Logo de SLee Dw">
                        </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>Contacto</h2>
                    <p><i class="fa-solid fa-location-dot"></i> Dirección: arturo prat #269</p>
                    <p><i class="fa-regular fa-envelope"></i> Correo: lyañez@profesor.ipleones.cl</p>
                    <p><i class="fa-solid fa-phone"></i> Teléfono: +569 3236 91 13</p>
                </div>
                <!--DIANDRA NO BORRAR ES PARA MAS ADELANTE SI QUEREMOS PONER ALGO MAS
        YA QUE ESTA DIVIDIDO EN 3 SECCIONES Y SOLO ESTAMOS OCUPANDO 2-->
                <!--<div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>-->
            </div>
            <div class="grupo-2">
                <small>&copy; 2024 <b>LABMUEST</b> - Todos los Derechos Reservados.</small>
            </div>
        </footer>
    </section>


    <script src="../js/app.js"></script>
    <script src="https://kit.fontawesome.com/4652dbea50.js" crossorigin="anonymous"></script>
    <script src="../js/slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>