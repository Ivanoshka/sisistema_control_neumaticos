<?php include("../conexionBD.php")?>
<?php include("../includes/head.php")?>


<!-- estilos -->
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

     <!--NAV (barra de navegacion)  -->
  <?php include("../includes/nav.php") ?>
  
  
    <div class="container-fluid contenidoPrincipal">

      <div class="row">


   <!--     sidebar
 -->
      <?php include("../includes/sidebar.php") ?>
      
      
           <div class="container p-4"> 

  <main>
    <div class="h1titulo">
      <H1 class="tituloPrincipal">Llantas</H1>
    </div>

  </main>

  <div class="container p-4">
    
    <div class="row divIcon">
      <i class="large material-icons ">
        tire_repair
      </i>
    </div>

    <!-- nuevo codigo -->
    <div class="row">
      <b>NUEVA LLANTA</b>
    </div>
    <div class="row">

<div class="col-md-2">

  <!--       //ALERTA DE NUEVO REGISTRO CON EXITO 
--> <?php

if (isset($_SESSION['message'])) { ?>

  <div class="alert alert-success alert-dismissible fade show alertExito" role="alert">
          <?= $_SESSION['message']; ?>
  
          <button type="button" class="btn-close botonEquis" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
  
      <?php session_unset();  ?>
  
      
  <?php } elseif(isset($_SESSION['messageError'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show alertFail" role="alert" >
          <?= $_SESSION['messageError']; ?>
          <button type="button" class="btn-close botonEquis" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      
      <?php session_unset();  ?>
  <?php } ?>


  <!--       FORMULARIO PARA INSERTAR CONDUCTORES
-->
  <form action="../guardar_llanta.php" method="POST">

  <!-- ID manual -->
    <div class="row">
      <div class="input-field col s6">
        <input id="id_llanta" type="text" class="validate" name="id_llanta">
        <label for="id_llanta">Id Llanta</label>
      </div>

      <!-- Marca -->
      <div class="row">
      <div class="input-field col s6">
        <input id="marca" type="text" class="validate" name="marca">
        <label for="marca">Marca</label>
      </div>

    </div>

    <!--Modelo -->
    <div class="row">
      <div class="input-field col s6">
        <input id="modelo" type="text" class="validate" name="modelo">
        <label for="modelo">Modelo</label>
      </div>

    </div>

    <!-- Posicion llanta -->
          <div class="row">
            <div class="input-field col s6">
            <select name="id_posicion_llanta" id="id_posicion_llanta" onclick="mostrarFunciones()">
                                    <?php
                                    $consulta = "SELECT * FROM posicion_llanta";
                                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                                    $valorPredeterminado = '<?php $id_posicion_llanta ?>';
                                    ?>

                                    <option value="<?php echo $id_posicion_llanta ?>" style="display: none;"></option>
                                    <?php



                                    foreach ($ejecutar as $opciones) : ?>

                                        <option value="<?php echo $opciones['id_posicion_llanta'] ?> "><?php echo $opciones['nombre_posicion'] ?> </option>







                                    <?php endforeach ?>
                                </select>

                <label for="id_posicion_llanta">Nombre de la Posicion de la Llanta</label>
            </div>
          </div>
    
    <!--  Condicion llanta 
    <div class="row">
      <div class="input-field col s6">
            <select name="condicion_llanta" id="condicion_llanta">
              <optgroup label='Desgaste Relativo'>
                <option>Interno</option>
                <option>Intermedio</option>
                <option>Externo</option>
              </optgroup>
              <optgroup label='Desgaste Absoluto'>
                <option>Interno</option>
                <option>Intermedio</option>
                <option>Externo</option>
              </optgroup>
          </select>
    
        <label for="condicion_llanta">Condicion Llanta</label>
      </div>
    </div> -->

 


    <!--Seleccionar si sera para camioneta o remolque -->
   
    <div class="row">
    <b>Selecciona si sera CAMION o REMOLQUE</b>
    <br>
    <!-- se crean estos 2 botones para seleccionar si es camion o remolque, se manda llamar una funcion de javaScript y se pueda ejecutar -->
    <p><a href="javascript:camion();" class="btn btn-secondary">Camion</a></p>
    <p><a href="javascript:remolque();" class="btn btn-secondary">Remolque</a></p>

    <br>
    
      <div class="input-field col s6" id="camion" style="display:none;" >
      
          <select name="id_camion" id="id_camion">
                    <?php
                    include("../conexionBD.php");
                    $consulta = "SELECT * FROM camion";
                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
                    ?>

                    <?php
                    foreach ($ejecutar as $key => $opciones) : ?>
                      <option value="<?php echo $opciones['id_camion'] ?> "><?php echo "Placas del camion: " ?><?php echo $opciones['placas'] ?><?php echo "   Serie del camion: " ?> <?php echo $opciones['unidad_serie'] ?></option>

                    <?php endforeach ?>
                  </select>
            <label for="numero_contrato">Camion</label>
      </div>

      <div class="input-field col s6" id="remolque" style="display:none;">
      <select name="id_remolque" id="id_remolque">
                <?php
                include("../conexionBD.php");
                $consulta = "SELECT * FROM remolque";
                $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                ?>

                <?php
                foreach ($ejecutar as $key => $opciones) : ?>
                  <option value="<?php echo $opciones['id_remolque'] ?> "><?php echo "Placas del remolque: " ?><?php echo $opciones['placas'] ?><?php echo "   Serie del Remolque: " ?> <?php echo $opciones['unidad_serie'] ?></option>

                <?php endforeach ?>
              </select>
        <label for="id_remolque">Remolque</label>
      </div>

    </div>
     <!-- script para obtener el id de los div y mandarlos por localstorage -->

    <script type="text/javascript">
      // Obtener el ID del div camion y almacenarlo en localStorage
      var camion = document.getElementById('camion');
        var divID = camion.id;
        localStorage.setItem('divID', divID);
        // Obtener el ID del div remolque y almacenarlo en localStorage
      var remolque = document.getElementById('remolque');
        var divIDR = remolque.id;
        localStorage.setItem('divIDR', divIDR);
    </script>

<!-- Script para mostrar el div sea para agregar camion o el remolque  -->
    <script type="text/javascript">
      divC = document.getElementById('camion');
      divR = document.getElementById('remolque');
              function camion() {
            
            if (divC.style.display === "none") {
              divC.style.display = "block";
              divR.style.display = "none";
            } else {
              divC.style.display = "none";
              divR.style.display = "block";
            }
        }

        function remolque() {
            
            if (divR.style.display === "none") {
              divR.style.display = "block";
              divC.style.display = "none";
            } else {
              divR.style.display = "none";
              divC.style.display = "block";
            }
        }
    </script>


    <!--Fecha de colocacion -->
    <div class="row">
      <div class="input-field col s6">
        <input id="fecha_de_colocacion" type="Date" class="validate" name="fecha_de_colocacion">
        <label for="numero_contrato">Fecha Colocacion de RFID</label>
      </div>

    </div>



    <input type="submit" name="save_llanta" value="Guardar" id="" class="btn btn-sucess btn-block" style="font-weight: bold;>
  </form>
</div>




<!-- Busqueda de mandar un dato a un table -->
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
              <td>
                <a href="edit_llanta.php?id_llanta=<?php echo $row['id_llanta']?>" class="btn btn-secondary">
                  <i class="fas fa-marker"></i>
                </a>
                <a href="eliminar_llanta.php?id_llanta=<?php echo $row['id_llanta']?>" class="btn btn-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
                <a href="graficas_llanta_view.php?id_llanta=<?php echo $row['id_llanta'] ?>" class="btn btn-danger">
                <b>GRAFICAS</b>
                    <i class="fa-solid fa-chart-pie"></i>
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
  
  
  <script type="text/javascript">
    /*  SCRIPT PARA QUE EL MATERIALIZE TRABAJE BIEN, POR EJEMPLO, NOS SIRVE PARA QUE EL SELECT FUNCIONE CORRECTAMENTE */
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems, arguments);
    });
  </script>
  <?php include("../includes/footer.php") ?>
</body>