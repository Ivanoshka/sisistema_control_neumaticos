<!-- Es la primera vista que le sale al usuario
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  MATERIALIZE CSS -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--     STYLES CSS
 -->
    <link rel="stylesheet" href="./src/styles.css">

    <!--  ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<!-- icono de la pestaña
 -->    <link rel="icon" type="image/png" href="./src/favicon.jpg">


    <title>INICIAR SESION</title>


</head>

<body c>
    <header class="headerClass">
        <h1 class="h1">BIENVENIDO AL <b class="ajusteTexto"> SISTEMA</h1>
    </header>

    <!--     LOGIN
 -->

    <form method="POST" action="">
        <div class="LOGIN">

<!-- LLAMAMOS AL ARCHIVO controlador_login para procesar el login y a la conexionBD para conectar a la base de datos -->
        <?php
            include("conexionBD.php");
            include("validar_login.php");
        ?>       

      <!--       USUARIO -->
            <div class="row">


                <div class="input-field col s12">
                    <i class="material-icons prefix">person</i>
                    <input id="icon_prefix" type="text" name="usuario">
                    <label for="icon_prefix">Usuario</label>
                </div>
            </div>

<!--                 PASSWORD
 -->            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="icon_prefix2" type="password"  name="password">
                    <label for="icon_prefix2">Contraseña</label>
                </div>
            </div>

            
            <input class="btn botoon" name="btnIngresar" type="submit" value="Ingresar"></button>

            <input class="btn botoon" name="btnIngresarInvitado" type="submit" value="Ingresar como invitado"></button>


        </div>

    </form>

  


    <div class="imagen">
        <img src="src/login_imagen.svg" alt="imagenDEexito">
    </div>
    <a class="waves-effect waves-light btn helpLogin" id="HELP" href="./views/contacto_view.php">
        Contáctanos
    </a>

    <!-- footer -->
    <footer class="footerLogin">
        <p><b class="bfooterLogin">Copyright © 2023, desarrollador por <a
                    href="https://www.linkedin.com/in/carlos-ivan-roque-9504a7246"
                    class="ivanoshka hoverable">FERRADA</a> </b></p>
        <p>Todos los derechos reservados</p>
    </footer>
    <!--   script para el boton de ayuda -->
    <!-- <script>
        document.getElementById("HELP").onclick = function () {

            M.toast({ html: 'Si ocupas ayuda, contacta al administrador', classes: 'rounded' });
        }
    </script> -->
</body>

</html>