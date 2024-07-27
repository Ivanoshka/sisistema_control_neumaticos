<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--     bootstrap
 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!--         FontAwesone
 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!--     css
 -->
    <link rel="stylesheet" href="../src/styles.css">
    <title>Animales</title>
</head>

<body>

    <body class="colorCremita">

        <!--     BARRA DE NAVEGACION
 -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <h1 class="navbar-brand" href="#"><a href="../index.html" class="h1Titulo">ZOO</a> <img src="../src/patita.png" alt="LogoDelTitulo" class="imagenLogo">

                </h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Animales.php">Animales
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Recorridos.php">Recorridos</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contacto.php">Contáctanos</a>

                        </li>


                        <li class="nav-item correo">
                            <a href="Facebook"><i class="fas fa-envelope"></i>
                            </a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>

        <header class="">

            <h2>ANIMALES</h2>

            <div class="HeaderAnimales">
                <!-- Example single danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle dropHeaderAnimals" data-bs-toggle="dropdown" aria-expanded="false">
                        Filtrar Animales
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Animales.html">Habitad</a></li>
                        <li><a class="dropdown-item" href="#">Especie</a></li>
                        <li><a class="dropdown-item" href="#">Comida</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Otro</a></li>
                    </ul>
                </div>

            </div>


        </header>

        <!-- MAIN DE CARD DE ANIMALES
 -->
        <div class="container text-center gridIndex">
            <div class="row cardsGeneral">
                <div class="col-sm-1">
                    <div class="card" style="width: 1300%;">
                        <!--                     IMAGEN
 -->
                        <div class="thumb">
                            <a href="#"></a>
                            <img src="<?php ?> ../src/animales/foca.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="colorSemiObscuro">
                            <h1 class="card-title">Foca</h1>
                            </div>
                            <!--                             FECHA DE NACIMIENTO
 -->
                            <p><b>Fecha Nacimiento: </b> </p>
                            <p class="FecNac">19-12-00</p>

                            <p><b>Sexo:</b></p>

                            <p class="sexo">Masculino</p>

                            <p><b>Nombre Cientifico:</b></p>

                            <p 
                            class="nombreCientifico">Kil kilisndjs
                            </p>

                            <p><b>Alimentación:</b></p>

                            <p 
                            class="CveAlimentacion">Alpaca
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- FOOTER
 -->
        <footer>

            <nav class="navbar navbar-expand-lg navbar-dark bg-primary footer">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">ZOO.COM.MX</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarColor01">
                        <ul class="navbar-nav me-auto">



                            <li class="nav-item footerNav">
                                <a class="nav-link" href="#">Contactanos</a>
                            </li>
                            <li class="nav-item footerNav">
                                <a class="nav-link" href="#">Conocenos</a>
                            </li>
                            <li class="nav-item footerNav">
                                <a class="nav-link" href="#">Precios</a>
                            </li>

                            <li class="nav-item correo">
                                <a href="Facebook"><i class="fas fa-envelope"></i>
                                </a>
                            </li>
                        </ul>



                    </div>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark bg-primary footer2">


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">

                    <H4>EMPRESA SOCIALMENTE RESPONSABLE @</H4>

                </div>
                </div>
            </nav>

        </footer>


    </body>
</body>

</html>