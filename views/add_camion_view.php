<!-- conexion a la base de datos -->
<?php include("../conexionBD.php") ?>
<!-- header -->
<?php include("../includes/head.php") ?>

<link rel="stylesheet">

<style>

.flexbox {
    display: flex;
  }

  .contenidoPrincipal {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
  }

  .contenidoPrincipal main {
    flex-grow: 1 !important;
  }

  /* Estilos generales */
  #sidebar {
    width: 250px;
    background-color: #f8f9fa;
    height: 100vh;
    border-radius: 6px;
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

<body>

  <!--NAV (barra de navegacion) -->
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
            <H1 class="tituloPrincipal">CAMIONES</H1>
          </div>

        </main>

        <div class="container p-4">
          <div class="row divIcon">
            <i class="large material-icons ">
              directions_bus
            </i>
          </div>

          <div class="row">
            <b>NUEVO CAMIÓN</b>
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

              <form action="../guardar_camion.php" method="post">
                <!-- PLACAS -->

                <div class="row">
                  <div class="input-field col s6">
                    <input id="placas" type="text" class="validate" autofocus name="placas">
                    <label for="placas">Placas</label>
                  </div>

                </div>
                <!-- Marca Del camión -->
                <div class="row">
                  <div class="input-field col s6">
                    <input id="marca" type="text" class="validate" name="marca">
                    <label for="marca">Marca Del Camión</label>
                  </div>

                </div>

                <!-- Modelo
 -->
                <div class="row">
                  <div class="input-field col s6">
                    <input id="modelo" type="text" class="validate" name="modelo">
                    <label for="modelo">Modelo</label>
                    <span class="helper-text">El modelo del camión puede ser diferente, segun la marca.</span>
                  </div>
                </div>


                <!-- Unidad de Serie
 -->
                <div class="row">
                  <div class="input-field col s6">
                    <input id="unidad_serie" type="text" class="validate" name="unidad_serie">
                    <label for="unidad_serie">Unidad de Serie</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Ingresa la unidad de serie, es un codigo unico del camión</span>
                  </div>
                </div>



                <!--           SELECT PARA ELEGIR CONDUCTOR DEL CAMION, EL SELECT CONSUMO LOS ITEMS DE LA BASE DE DATOS
 -->

                <div class="row">
                  <div class="input-field col s6">
                    <select name="conductores" id="conductores">
                      <?php
                      include("../conexionBD.php");
                      $consulta = "SELECT * FROM conductor";
                      $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                      ?>

                      <?php
                      foreach ($ejecutar as $key => $opciones) : ?>
                        <option value="<?php echo $opciones['id_conductor'] ?> "><?php echo $opciones['nombre_conductor'] ?> <?php echo $opciones['apellido_conductor'] ?></option>

                      <?php endforeach ?>
                    </select>
                    <label>Conductor</label>

                  </div>
                </div>
                <input type="submit" name="save_camion" value="Guardar" id="" class="btn btn-sucess btn-block" style="font-weight: bold;>

              </form>




            </div>

            <!--       //TABLA DE CAMIONES
 -->
            <div class="col-md-8">

              <br>

              <table class="table table-bordered">
                <thead>
                  <tr>

                    <th scope="col">Placas</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Unidad de Serie</th>
                    <th scope="col">Conductor</th>

                    <th scope="col"></th>
                  </tr>
                </thead>
                <?php
                $query = "SELECT * FROM camion";
                $resultado_camiones = mysqli_query($conexion, $query);

                while ($row = mysqli_fetch_array($resultado_camiones)) { ?>

                  <tr>
                    <td><?php echo $row['placas'] ?></td>
                    <td><?php echo $row['marca_camion'] ?></td>
                    <td><?php echo $row['modelo'] ?></td>
                    <td><?php echo $row['unidad_serie'] ?></td>
                    <td><?php echo $row['id_conductor'] ?></td>

                    <td>
                      <a href="../edit_camion.php?id_camion=<?php echo $row['id_camion'] ?>">
                        <span class="material-icons">
                          edit
                        </span>
                      </a>
                    </td>

                    <td>
                      <a href="../delete_camion.php?id_camion=<?php echo $row['id_camion'] ?>">
                        <span class="material-icons">
                          delete
                        </span>
                      </a>
                    </td>
                  </tr>


                <?php } ?>
                <tbody>

                </tbody>
              </table>

            </div>

          </div>
        </div>

      </div>

    </div>


  </div>

  <script type="text/javascript">
    /*  SCRIPT PARA QUE EL MATERIALIZE TRABAJE BIEN, POR EJEMPLO, NOS SIRVE PARA QUE EL SELECT FUNCIONE CORRECTAMENTE */
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems, arguments);
    });
  </script>

  <!-- FOOTER
 --> <?php include("../includes/footer.php") ?>

</body>