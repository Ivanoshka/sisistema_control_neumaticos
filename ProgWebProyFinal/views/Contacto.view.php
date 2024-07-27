<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--     bootstrap
 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--         FontAwesone
 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!--     css
 -->
    <link rel="stylesheet" href="../src/styles.css">

    <title>Contacto</title>
</head>



<body class="colorCremita">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h1 class="navbar-brand" href="#"><a href="../index.html" class="h1Titulo">ZOO</a> <img src="../src/patita.png"
                    alt="LogoDelTitulo" class="imagenLogo">

            </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
                aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Animales.view.php">Animales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Recorridos.html">Recorridos</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Contacto.php">Contáctanos
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>


                    <li class="nav-item correo">
                        <a href="Facebook"><i class="fas fa-envelope"></i>
                        </a>
                    </li>




                </ul>

            </div>
        </div>
    </nav>

    <!--     HEADER
 -->
    <header class="HeaderRecorridos">

        <h1 class="textoMain1Index">CONTACTANOS</h1>
        
    </header>
    <h3 style="text-align: center; color: black; margin-top: 2%;"  >¡Gracias por visitar nuestra página web! Si tienes alguna
        pregunta o comentario, no dudes en ponerte en contacto con nosotros a través de este formulario.</h3>





    <!-- MAIN -->
    <div style="height: 100px;">
        <div class="h-25 d-inline-block" style="width: 120px;">
            <img src="../src/contacto.jpg" style="width: 500%; margin-left: 30%; margin-top: 75%; ">
        </div>

    </div>



    <div class="container mt-5" style="margin-left: 25%;">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="../enviar.php" method="post">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Ingresa tu correo electrónico" required>
                    </div>
                    <div class="mb-3">
                        <label for="texto" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="texto" name="texto" placeholder="Escribe tu mensaje"
                            rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>

                </form>
            </div>
        </div>
    </div>









    <!-- FOOTER
 -->
    <footer>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary footer">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ZOO.COM.MX</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
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

                        <li class="nav-item footerNav">
                            <a class="nav-link" href="./subir.view.php">Admin</a>
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


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">

                <H4>EMPRESA SOCIALMENTE RESPONSABLE @</H4>

            </div>
            </div>
        </nav>

    </footer>
</body>


</html>