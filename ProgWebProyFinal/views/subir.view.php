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
    <title>Subir Foto</title>
</head>

<body>

    <body class="colorSemiObscuro">

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

            <h2>Subir Foto</h2>

        </header>


        <main>

            <!--         FORMARIO PARA SUBIIR ARCHIVOS
 -->
            <div class="contenedoooooor formularioSubirFoto">
                <form enctype="multipart/form-data" class="formulario" method="post" action="../funciones.php">

                    <label for="foto">SELECCIONA LA FOTO</label>
                    <input type="file"  class="form-control" id="foto" name="foto">


                    
                   
 
                    <label for="nombre">NOMBRE DE LA FOTO</label>
                    <input type="text"  class="form-control" id="nombre" name="nombre" placeholder="Ingresa Nombre de la foto">

                    <label for="apodo">APODO DEL ANIMAL</label>
                    <input type="text"  class="form-control" id="apodo" name="apodo" placeholder="Ingresa Apodo">

                    <label for="FecNac">FECHA DE NACIMIENTO DEL ANIMAL</label>
                    <input type="date" class="form-select" id="FecNac" name="FecNac">

                    <label for="sexo">Sexo</label>
                    <select class="form-select" aria-label="Default select example" name="sexo" id="sexo">
                        <option value="Hembra">Hembra</option>
                        <option value="Macho">Macho</option>

                    </select>


                    <label for="CveEspecie">Especie</label>
                    <select class="form-select" aria-label="Default select example" id="CveEspecie" name="CveEspecie">
                        <option value="Africano">Africano</option>
                        <option value="Americano">Americano</option>
                        <option value="Asiatico">Asiatico</option>
                        <option value="Europeo">Europeo</option>
                        <option value="Oceania">Oceanico</option>
                    </select>

                  <!--   <label for="nombreCientifico">NOMBRE CIENTIFICO</label>
                    <input type="text" id="nombreCientifico"  class="form-control" placeholder="Ingresa el Nombre Cientifico del animal"> -->

                    <!--PENDIENTE--> <label for="">SELECCIONA TIPO DE CLASIFICACION</label>
                    <select class="form-select" aria-label="Default select example" name="CveTipoClasificacion" id="CveTipoClasificacion">
                        <option value="valor-1">Opción 1</option>
                        <option value="valor-2">Opción 2</option>
                        <option value="valor-3">Opción 3</option>
                        <option value="valor-4">Opción 4</option>
                    </select>

                    <!-- <label for="CveVeterinario">SELECCIONA EL VETERINARIO</label>
                    <select class="form-select" aria-label="Default select example" id="CveVeterinario" name="CveVeterinario" >
                        <option selected>Seleccionar Veterinario</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select> -->

                    <!-- <label for="CveVeterinario">SELECCIONA ESPECIE</label>
                    <select class="form-select UltimoFORM" aria-label="Default select example" id="CveVeterinario" name="CveVeterinario" >
                        <option selected>Seleccionar Especie</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
 -->

                    <input type="submit" class="submit" name="SubirFoto" value="Subir Foto">

                </form>
            </div>
        </main>



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