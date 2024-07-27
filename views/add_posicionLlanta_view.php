<?php include("../conexionBD.php") ?>
<?php include("../includes/head.php") ?>

<body>

  <!--NAV (barra de navegacion)  -->
  <?php include("../includes/nav.php") ?>

  <main>
    <div class="h1titulo">
      <H1 class="tituloPrincipal">POSICION DE LA LLANTA</H1>
    </div>

  </main>

  <div class="container p-4">
    <div class="row divIcon">
      <i class="large material-icons ">
        tire_repair
      </i>
    </div>

    

    <div class="col-md-2">

<!--       //ALERTA DE NUEVO REGISTRO CON EXITO --> 
<?php if (isset($_SESSION['message'])) { ?>

    <div class="alert alert-sucess alert-dismissible fade show alertExito" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close botonEquis" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <?php session_unset();
      } ?>


        <!--       FORMULARIO PARA INSERTAR posiciones de llants-->

  <!--  <form action="../guardar_posicionLlanta.php" method="POST">

        
        <div class="row">
            <div class="input-field col s6">
                <select name="nombre_posicion" id="nombre_posicion">
                    <option>Posicion 1</option>
                    <option>Posicion 2</option>
                    <option>Posicion 3</option>
                    <option>Posicion 4</option>
                    <option>Posicion 5</option>
                    <option>Posicion 6</option>
                    <option>Posicion 7</option>
                    <option>Posicion 8</option>
                    <option>Posicion 9</option>
                    <option>Posicion 10</option>
                    <option>Posicion 11</option>
                    <option>Posicion 12</option>
                    <option>Posicion 13</option>
                    <option>Posicion 14</option>
                    <option>Posicion 15</option>
                    <option>Posicion 16</option>
                    <option>Repuesto 1</option>
                    <option>Repuesto 2</option>
                </select>
                <label for="nombre_posicion">Nombre de la Posicion de la Llanta</label>
            </div>

          

            <input type="submit" name="save_posicion" value="Guardar" id="" class="btn btn-sucess btn-block">
        </form>
    </div>-->

    <!-- Tabla de contenido de las posiciones de la llanta -->
    <div class="col-md-8">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>IdPosicion Llanta</th>
              <th>Nombre Posicion de la Llanta</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = "SELECT * FROM posicion_llanta";
              $result_posicion=mysqli_query($conexion, $query);

              while($row = mysqli_fetch_array($result_posicion)){?>
                  <tr>
                    <td> <?php echo $row['id_posicion_llanta'] ?> </td>
                    <td> <?php echo $row['nombre_posicion'] ?> </td>
                    <td>
                      <a href="edit_posicionLlanta.php?id_posicion_llanta=<?php echo $row['id_posicion_llanta']?>" class="btn btn-secondary">
                        <i class="fas fa-marker"></i>
                      </a>
                      <a href="eliminar_posicionLlanta.php?id_posicion_llanta=<?php echo $row['id_posicion_llanta']?>" class="btn btn-danger">
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

  

  

  <script type="text/javascript">
    /*  SCRIPT PARA QUE EL MATERIALIZE TRABAJE BIEN, POR EJEMPLO, NOS SIRVE PARA QUE EL SELECT FUNCIONE CORRECTAMENTE */
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems, arguments);
    });
  </script>

  <?php include("../includes/footer.php") ?>
</body>