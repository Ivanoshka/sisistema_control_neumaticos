<div id="sidebar">
<?php

session_start();

if (isset($_POST['logout'])) {
    // Destruir todas las variables de sesión
    $_SESSION = array();

    // Destruir la sesión
    session_destroy();

    // Redirigir al usuario a la página de inicio de sesión u otra página
    header('Location: index.php');
    exit;
}
?>


        <h4 class="H4SIDEBAR">DATOS GENERALES DE LA <b>CUENTA</b></h4>
        <ul class="list-group ">
          <li class="list-group-item ">Usuario: <b><?php echo $_SESSION['usuario']; ?>
            </b></li>

          <li class="list-group-item">Nombre: <b><?php echo $_SESSION['nombre_usuario']; ?></b></li>
          <li class="list-group-item">Apellido: <b> <?php echo $_SESSION['apellido_usuario'] ?> </b></li>

          <li class="list-group-item"><a href="./add_desgastes_view.php">Registrar desgaste<i class="material-icons right waves-effect waves-light ">add_circle_outline</i></a></li>
          <li class="list-group-item"><a href="./add_camion_view.php">Añadir Camión<i class="material-icons right waves-effect waves-light ">add_circle_outline</i></a></li>
          <li class="list-group-item"><a href="./add_llanta_view.php">Añadir LLanta <i class="material-icons right waves-effect waves-light ">add_circle_outline</i></a> </li>

          <li class="list-group-item"><a href="./add_conductores_view.php">Añadir Conductor<i class="material-icons right waves-effect waves-light ">add_circle_outline</i></a></li>
          <li class="list-group-item"><a href="../index.php" style="color: brown;" name="logout">Cerrar Sesión<i class="material-icons right waves-effect waves-light">power_settings_new</i></a></li>


          <li style="margin-top: 10%; margin-left: 40%;"><a href="./add_camion_view.php" class="btn">
              <i class="fa-solid fa-house"></i>
            </a></li>
        </ul>

      </div>
    </div>