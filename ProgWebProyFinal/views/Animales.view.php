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

    <!-- jquery
 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>




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
                            <a class="nav-link" href="../index.html">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Animales.php">Animales
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Recorridos.html">Recorridos</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./Contacto.view.php">Contáctanos</a>

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




        </header>

        <!-- MAIN DE CARD DE ANIMALES
 -->


        <div class="container text-center gridIndex">
            <div class="row cardsGeneral">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <!--                     IMAGEN
 -->
                        <div class="thumb">
                            <a href="#"></a>
                            <img src="<?php ?> ../src/leon-index.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Foca</h5>
                            <p class="card-text nombreCientifico">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="../ProgWebProyFinal/views/foto.view.php" class="btn btn-primary continuar">Saber Mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <!--                     IMAGEN
 -->
                        <div class="thumb">
                            <a href="#"></a>
                            <img src="<?php ?> ../src/animales/elefante.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Foca</h5>
                            <p class="card-text nombreCientifico">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="../ProgWebProyFinal/views/foto.view.php" class="btn btn-primary continuar">Saber Mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <!--                     IMAGEN
 -->
                        <div class="thumb">
                            <a href="#"></a>
                            <img src="<?php ?> ../src/animales/jirafa.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Foca</h5>
                            <p class="card-text nombreCientifico">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="../ProgWebProyFinal/views/foto.view.php" class="btn btn-primary continuar">Saber Mas</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row cardsGeneral">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <!--                     IMAGEN
 -->
                        <div class="thumb">
                            <a href="#"></a>
                            <img src="<?php ?> ../src/mono-index.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Foca</h5>
                            <p class="card-text nombreCientifico">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="../ProgWebProyFinal/views/foto.view.php" class="btn btn-primary continuar">Saber Mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <!--                     IMAGEN
 -->
                        <div class="thumb">
                            <a href="#"></a>
                            <img src="<?php ?> ../src/animales/pinguino.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Foca</h5>
                            <p class="card-text nombreCientifico">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="../ProgWebProyFinal/views/foto.view.php" class="btn btn-primary continuar">Saber Mas</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <!--                     IMAGEN
 -->
                        <div class="thumb">
                            <a href="#"></a>
                            <img src="<?php ?> ../src/animales/tigre.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Foca</h5>
                            <p class="card-text nombreCientifico">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="../ProgWebProyFinal/views/foto.view.php" class="btn btn-primary continuar">Saber Mas</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row cardsGeneral">

                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <!--                     IMAGEN
 -->
                        <div class="thumb">
                            <a href="#"></a>
                            <img src="<?php ?> ../src/animales/ocelote.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Foca</h5>
                            <p class="card-text nombreCientifico">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="../ProgWebProyFinal/views/foto.view.php" class="btn btn-primary continuar">Saber Mas</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <!--                     IMAGEN
 -->
                        <div class="thumb">
                            <a href="#"></a>
                            <img src="<?php ?> ../src/animales/aguila.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Foca</h5>
                            <p class="card-text nombreCientifico">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="../ProgWebProyFinal/views/foto.view.php" class="btn btn-primary continuar">Saber Mas</a>
                        </div>
                    </div>
                </div>



                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <!--                     IMAGEN
 -->
                        <div class="thumb">
                            <a href="#"></a>
                            <img src="<?php ?> ../src/animales/oso-hormiguero.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Foca</h5>
                            <p class="card-text nombreCientifico">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="../ProgWebProyFinal/views/foto.view.php" class="btn btn-primary continuar">Saber Mas</a>
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