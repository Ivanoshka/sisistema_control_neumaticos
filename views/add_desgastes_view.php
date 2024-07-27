<?php include("../conexionBD.php") ?>
<?php include("../includes/head.php") ?>

<?php include("../includes/nav.php") ?>



<body>


    <main>
    <div class="h1titulo">
      <H1 class="tituloPrincipal">DESGASTE LLANTA</H1>
    </div>

    </main>

    <div class="container p-4">
    <div class="row divIcon">
      <i class="large material-icons ">
        tire_repair
      </i>
    </div>
    
    <div class="row">
      <b>DESGASTE</b>
    </div>
    <div class="row">

      <div class="col-md-2">

        <!--       //ALERTA DE NUEVO REGISTRO CON EXITO 
 --> <?php if (isset($_SESSION['message'])) { ?>

          <div class="alert alert-sucess alert-dismissible fade show alertExito" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close botonEquis" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <?php session_unset();
      } ?>


        <!--       FORMULARIO PARA INSERTAR DESGASTE
 -->
        <form action="../guardar_desgaste.php" method="POST">
             <!--           SELECT PARA ELEGIR LA LLANTA A REGISTRAR DESGASTE, EL SELECT CONSUMO LOS ITEMS DE LA BASE DE DATOS
 -->
        <div class="row">
            <div class="input-field col s6">
              <select name="id_llanta" id="id_llanta">
                <?php
                include("../conexionBD.php");
                $consulta = "SELECT * FROM llanta";
                $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                ?>

                <?php
                foreach ($ejecutar as $key => $opciones) : ?>
                  <option value="<?php echo $opciones['id_llanta'] ?> "> <?php echo $opciones['id_llanta'] ?> </option>

                <?php endforeach ?>
              </select>
              <label>Llanta</label>
              <p>Puedes checar el <b>ID DE LA LLANTA</b> en la tabla de abajo.</p>

            </div>
          </div>

          <!-- desgaste_total_interno -->
          <div class="row">
            <div class="input-field col s6">
              <input id="desgaste_total_interno" type="text" class="validate" autofocus name="desgaste_total_interno">
              <label for="desgaste_total_interno">Desgaste Total Interno </label>
            </div>

          </div>
          <!-- desgaste_total_medio -->
          <div class="row">
            <div class="input-field col s6">
              <input id="desgaste_total_medio" type="text" class="validate" autofocus name="desgaste_total_medio">
              <label for="desgaste_total_medio">Desgaste Total Medio </label>
            </div>

          </div>
          <!-- desgaste_total_externo -->
          <div class="row">
            <div class="input-field col s6">
              <input id="desgaste_total_externo" type="text" class="validate" autofocus name="desgaste_total_externo">
              <label for="desgaste_total_externo">Desgaste Total Externo</label>
            </div>

          </div>



          <!-- desgaste_parcial_interno -->
          <div class="row">
            <div class="input-field col s6">
              <input id="desgaste_parcial_interno" type="text" class="validate" autofocus name="desgaste_parcial_interno">
              <label for="desgaste_parcial_interno">Desgaste Parcial Interno </label>
            </div>

          </div>
          <!-- desgaste_parcial_medio -->
          <div class="row">
            <div class="input-field col s6">
              <input id="desgaste_parcial_medio" type="text" class="validate" autofocus name="desgaste_parcial_medio">
              <label for="desgaste_parcial_medio">Desgaste Parcial Medio </label>
            </div>

          </div>
          <!-- desgaste_parcial_externo -->
          <div class="row">
            <div class="input-field col s6">
              <input id="desgaste_parcial_externo" type="text" class="validate" autofocus name="desgaste_parcial_externo">
              <label for="desgaste_parcial_externo">Desgaste Parcial Externo</label>
            </div>

          </div>


          <!-- nombre viaje -->
          <div class="row">
            <div class="input-field col s6">
              <input id="nombre_viaje" type="text" class="validate" autofocus name="nombre_viaje" placeholder="GDL-MEX">
              <label for="nombre_viaje">Nombre del viaje</label>
            </div>

          </div>


         

          <input type="submit" name="save_desgaste" value="Guardar" id="" class="btn btn-sucess btn-block">
        </form>
      </div>





      <!-- Tabla de contenido de las llantas -->
<div class="col-md-8">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>IdLlanta</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>IdCamion</th>
        <th>IdRemolque</th>
        <th>Fecha Colocacion</th>
        <th>Posicion Llanta</th>
      </tr>
    </thead>
    <tbody>
    
      <?php
        $query = "SELECT * FROM llanta"  ;
        $result_llanta=mysqli_query($conexion, $query);

        while($row = mysqli_fetch_array($result_llanta)){?>
            <tr>
              <td> <?php echo $row['id_llanta'] ?> </td>
              <td> <?php echo $row['marca'] ?> </td>
              <td> <?php echo $row['modelo'] ?> </td>
              <td> <?php echo $row['id_camion'] ?> </td>
              <td> <?php echo $row['id_remolque'] ?> </td>
              <td> <?php echo $row['fecha_de_colocacion'] ?> </td>
              <td> Posicion: <?php echo $row['id_posicion_llanta'] ?></td>
            </tr>
        <?php } ?>

        
    </tbody>
  </table>
  
</div>
</div>


      <script type="text/javascript">
    /*  SCRIPT PARA QUE EL MATERIALIZE TRABAJE BIEN, POR EJEMPLO, NOS SIRVE PARA QUE EL SELECT FUNCIONE CORRECTAMENTE */
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems, arguments);
    });
  </script>
</body>