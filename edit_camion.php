<!-- ESTA CLASE ES PARA EDITAR LA INFORMACIÓN DE LOS CAMIONES -->


<?php
include("./conexionBD.php");

if (isset($_GET['id_camion'])) {
    $id = $_GET['id_camion'];
    $query = "SELECT * FROM camion WHERE id_camion = $id";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $placas = $row['placas'];
        $modelo = $row['modelo'];
        $marca = $row['marca_camion'];
        $unidad_serie = $row['unidad_serie'];
        $remolque = $row['remolque'];
        $id_conductor = $row['id_conductor'];
    }
}

if (isset($_POST['editar_camion'])) {
    $id = $_GET['id_camion'];
    $placas = $_POST["placas"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $unidad_serie = $_POST["unidad_serie"];
    $remolque = $_POST["remolque"];
    $id_conductor = $_POST["conductores"];



    $query = "UPDATE camion set placas = '$placas', marca_camion = '$marca', modelo = '$modelo', unidad_serie = '$unidad_serie', remolque='$remolque', id_conductor = '$id_conductor' WHERE id_camion = '$id' ";
    $resultado = mysqli_query($conexion, $query);



    header("Location: ./views/add_camion_view.php");
}

?>
<!-- //FORMULARIO DE EDIT
 --><?php include("./includes/head.php") ?>

<?php include("./includes/nav.php") ?>

<main>
    <div class="h1titulo">
    </div>

</main>

<body>


    <div class="container p-4">
        <div class="row">
            <br>
            <h4>EDITAR CAMIÓN</h4>
            <p>Antes de guardar tus cambios, asegurate de seleccionar de nuevo el <b>conductor</b></p>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit_camion.php?id_camion=<?php echo $_GET['id_camion']; ?>" method="POST">
                        <!--  EDITA PLACAS -->



                        <div class="row">
                            <div class="input-field col s6">
                                <input id="placas" type="text" class="validate" autofocus name="placas" value="<?php echo $placas ?>">
                                <label for="placas">Placas</label>
                            </div>
                            <!--             EDITA MARCA DE CAMION
 -->


                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="marca" type="text" class="validate" name="marca" value="<?php echo $marca ?>">
                                    <label for="marca">Marca Del Camión</label>
                                </div>

                            </div>

                            <!--             EDITA MODELO
 -->
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="modelo" type="text" class="validate" name="modelo" value="<?php echo $modelo ?>">
                                    <label for="modelo">Modelo</label>
                                    <span class="helper-text">El modelo del camión puede ser diferente, segun la marca.</span>
                                </div>
                            </div>
                            <!--                 EDITA UNIDAD DE SERIE
 -->

                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="unidad_serie" type="text" class="validate" name="unidad_serie" value="<?php echo $unidad_serie ?>">
                                    <label for="unidad_serie">Unidad de Serie</label>
                                    <span class="helper-text" data-error="wrong" data-success="right">Ingresa la unidad de serie, es un codigo unico del camión</span>
                                </div>
                            </div>

                            <!-- EDITA REMOLQUE                
 -->
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="remolque" type="text" class="validate" name="remolque" value="<?php echo $remolque ?>">
                                    <label for="remolque">Remolque</label>
                                    <span class="helper-text" data-error="wrong" data-success="right">Ingresa el codigo unico que tiene el remolque.</span>
                                </div>
                            </div>


                            <!--                     EDITA CONDUCTOR
 -->
                            <div class="form-group">
                                <label>Conductor</label>


                                <select name="conductores" id="conductores" onclick="mostrarFunciones()">
                                    <?php
                                    $consulta = "SELECT * FROM conductor";
                                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                                    $valorPredeterminado = '<?php $id_conductor ?>';
                                    ?>

                                    <option value="<?php echo $id_conductor ?>" style="display: none;"></option>
                                    <?php



                                    foreach ($ejecutar as $opciones) : ?>

                                        <option value="<?php echo $opciones['id_conductor'] ?> "><?php echo $opciones['nombre_conductor'] ?> <?php echo $opciones['apellido_conductor'] ?></option>







                                    <?php endforeach ?>
                                </select>



                            </div>
                            <!-- Boton para guardar -->
                            <input type="submit" name="editar_camion" value="Aceptar" id="" class="btn btn-sucess btn-block">

                            <script type="text/javascript">
                                /*  SCRIPT PARA QUE EL MATERIALIZE TRABAJE BIEN, POR EJEMPLO, NOS SIRVE PARA QUE EL SELECT FUNCIONE CORRECTAMENTE */
                                document.addEventListener('DOMContentLoaded', function() {
                                    var elems = document.querySelectorAll('select');
                                    var instances = M.FormSelect.init(elems, arguments);
                                });
                            </script>



                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php include("./includes/footer.php") ?>

</body>


