<!-- conexion a la base de datos -->
<?php include("../conexionBD.php") ?>
<!-- header -->
<?php include("../includes/head.php") ?>

<body>

  <!--NAV (barra de navegacion) -->
  <?php include("../includes/nav.php") ?>


  <div class="container-fluid contenidoPrincipal">
  <div class="row">
</div>

  </div>

  <main>
    <div class="h1titulo">
      <H1 class="tituloPrincipal">Generar Reportes de Viajes</H1>
    </div>

  </main>


  </div>

  <!--       //TABLA DE REPORTE
 -->
  <div class="col-md-8" style="margin-left: 10%;">

    <br>

    <table class="table table-bordered" >
      <thead>
        <tr>
          <th scope="col">ID Viaje</th>
          <th scope="col">Ruta</th>
          <th scope="col">Conductor</th>
          <th scope="col">Fecha de Salida</th>
          <th scope="col">Fecha de Llegada</th>
        </tr>
      </thead>
      <?php
      $query = "SELECT * FROM reporte";
      $resultado_reporte = mysqli_query($conexion, $query);

      while ($row = mysqli_fetch_array($resultado_reporte)) { ?>

        <!-- Se traen los datos de la base de datos de la tabla de reporte -->

        <tr>
          <td><?php echo $row['id_reporte'] ?></td>

          <td><?php echo $row['ruta'] ?></td>
          <td><?php echo $row['nombre_conductor'] ?></td>
          <td><?php echo $row['fecha_salida'] ?></td>
          <td><?php echo $row['fecha_llegada'] ?></td>
          <td>
            <a href="../reporte/generar_pdf.php?id_reporte=<?php echo $row['id_reporte'] ?>" class="btn btn-secondary">
              <b> GENERAR PDF</b>
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