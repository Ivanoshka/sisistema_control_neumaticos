<!-- estilos -->
<style>
  .alertFail {
    background-color: #ff3f3fc4 !important;
    color: #ffffff;
    border-radius: 20px;
    width: 350px;
    margin-bottom: 20px;
  }

  .flexbox {
    display: flex;
  }

  .asideGraficasLlantas {
    border-radius: 6px;
  }

  .mainGraficasLLantas {
    background: #ffffff !important;
    border-radius: 10px;
    margin-top: 2%;
    margin-left: 3%;

  }

  #sidebar {
    width: 250px;
    background-color: #f8f9fa;
    height: 100vh;
    border-radius: 6px;
    padding: 20px;
  }

  .contenidoPrincipal {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
  }

  .contenidoPrincipal main {
    flex-grow: 1 !important;
  }

  #main-content {
    padding: 20px;
  }

  .H4SIDEBAR {
    padding: 4%;
  }

  .H4SUBTITLE {
    font-size: 18px;
    color: #333;
    margin-bottom: 20px;
  }

  .h3Title {
    color: coral;
  }

  .separador {
    border-top: 1px solid #ccc;
    margin: 20px 0;
  }

  a:hover {
    color: white;
    text-decoration: none;
  }



  .list-group {
    margin-bottom: 20px;
  }

  .list-group-item {
    background-color: transparent;
    border: none;
    padding: 6px;
    font-size: 16px;
    line-height: 1.5;
    color: #333;
  }

  .list-group-item a {
    color: #333;
    text-decoration: none;
  }

  .list-group-item a:hover {
    color: coral;
  }

  /* Estilo para el ícono */
  .list-group-item i {
    float: right;
    margin-top: 3px;
    color: #999;
    font-size: 18px;
  }

  /* Estilo para el botón de inicio */
  .list-group-item.btn i {
    margin-top: 0;
  }
</style>

<?php include("../conexionBD.php") ?>
<?php include("../includes/head.php") ?>

<?php


/*  $nombre_socio = "SELECT nombre_socio FROM socio WHERE usuario = '$usuario'"; */
/*  $result=mysqli_query($conexion, $query); */
?>

<body>

  <!--NAV (barra de navegacion)  -->
  <?php include("../includes/nav.php") ?>

  <div class="container-fluid contenidoPrincipal">

    <div class="row">

      <!--     sidebar
 -->
      <?php include("../includes/sidebar.php") ?>


      <!-- MAIN -->

      <div class="container p-4">
        <main>
          <div class="h1titulo">
            <H1 class="tituloPrincipal">CONDUCTORES</H1>
          </div>

        </main>

        <div class="container p-4">
          <div class="row divIcon">
            <i class="large material-icons ">
              person
            </i>
          </div>

          <div class="row">
            <b>NUEVO CONDUCTOR</b>
          </div>
          <div class="row">

            <div class="col-md-2">

              <!-- ALERT DE EXITO AL BORRAR O ALERT DE FALLO AL GUARDAR
 -->
              <?php

              if (isset($_SESSION['message'])) { ?>

                <div class="alert alert-success alert-dismissible fade show alertExito" role="alert">
                  <?= $_SESSION['message']; ?>

                  <button type="button" class="btn-close botonEquis" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php session_unset();  ?>

              <?php } elseif (isset($_SESSION['messageError'])) { ?>
                <div class="alert alert-danger alert-dismissible fade show alertFail" role="alert">
                  <?= $_SESSION['messageError']; ?>
                  <button type="button" class="btn-close botonEquis" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <?php session_unset();  ?>
              <?php } ?>

              <!--       FORMULARIO PARA INSERTAR CONDUCTORES
 -->
              <form action="../guardar_conductor.php" method="POST">

                <!-- Nombre Conductor -->
                <div class="row">
                  <div class="input-field col s6">
                    <input id="nombre" type="text" class="validate" autofocus name="nombre_conductor">
                    <label for="nombre">Nombre</label>
                  </div>

                </div>

                <!-- Apellido Conductor -->
                <div class="row">
                  <div class="input-field col s6">
                    <input id="Apellido" type="text" class="validate" name="apellido_conductor">
                    <label for="Apellido">Apellido</label>
                  </div>

                </div>

                <!-- Numero de contrato Conductor -->
                <div class="row">
                  <div class="input-field col s6">
                    <input id="numero_contrato" type="text" class="validate" name="numero_contrato">
                    <label for="numero_contrato">Numero de Contrato</label>
                  </div>

                </div>

                <input type="submit" name="save_conductor" value="Guardar" id="" class="btn btn-sucess btn-block" style="font-weight: bold;>
              </form>
            </div>

            <!-- Tabla de contenido de los conductores -->
            <div class="col-md-8">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>IdConductor</th>
                    <th>Nombre conductor</th>
                    <th>Apellido conductor</th>
                    <th>Numero contrato</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM conductor";
                  $result_conductor = mysqli_query($conexion, $query);

                  while ($row = mysqli_fetch_array($result_conductor)) { ?>
                    <tr>
                      <td> <?php echo $row['id_conductor'] ?> </td>
                      <td> <?php echo $row['nombre_conductor'] ?> </td>
                      <td> <?php echo $row['apellido_conductor'] ?> </td>
                      <td> <?php echo $row['numero_contrato'] ?> </td>
                      <td>
                        <a href="edit_conductor.php?id_conductor=<?php echo $row['id_conductor'] ?>" class="btn btn-secondary">
                          <i class="fas fa-marker"></i>
                        </a>
                        <a href="eliminar_conductor.php?id_conductor=<?php echo $row['id_conductor'] ?>" class="btn btn-danger">
                          <i class="far fa-trash-alt"></i>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>

      </div>


    </div>

  </div>


  <?php include("../includes/footer.php") ?>
</body>