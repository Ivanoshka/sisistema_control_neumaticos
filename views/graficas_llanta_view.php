<?php include("../conexionBD.php") ?>
<?php include("../includes/head.php") ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



<!-- BACKEND DE PARA RELLENAR LOS DATOS GENERALES DE LA LLANTA -->
<?php
if (isset($_GET['id_llanta'])) {
    $id_llanta = $_GET['id_llanta'];
    $query = "SELECT * FROM llanta WHERE id_llanta = $id_llanta";
    $result = mysqli_query($conexion, $query);

    //SI LA QUERY ENCUENTRA MINIMO UN RESULTADO, EJECUTA LO SIGUIENTE
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id_llanta = $row['id_llanta'];
        $camion = $row['id_camion'];
        $posicion_llanta = $row['id_posicion_llanta'];
        $marca = $row['marca'];
        $modelo = $row['modelo'];
        $fecha_de_colocacion =  $row['fecha_de_colocacion'];
    }
}

?>

<style>
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
        height: 140vh;
        border-radius: 6px;
    }

    #main-content {
        padding: 20px;
    }

    .H4SIDEBAR {
        padding: 4%;
    }

    .H4SUBTITLE {
        margin-top: 3%;
    }

    .h3Title {
        color: coral;
    }

    .separador {
        border-top: 1px solid #ccc;
        margin: 20px 0;
    }
    a:hover{
        color:white;
        text-decoration:none;
    }
</style>

<body>
    <!--NAV (barra de navegacion)  -->
    <?php include("../includes/nav.php") ?>

    <!-- SIDEBAR LATERAL IZQUIERDO
 -->
    <div class="container-fluid">
        <div class="row">
            <div id="sidebar">
                <h4 class="H4SIDEBAR">DATOS GENERALES DE LA LLANTA</h4>
                <ul class="list-group ">
                    <li class="list-group-item ">Llanta: <b><?php echo $id_llanta ?>
                        </b></li>

                    <li class="list-group-item">Camión: <b><?php echo $camion ?></b></li>
                    <li class="list-group-item">Posición llanta: <b> <?php echo $posicion_llanta ?> </b></li>
                    <li class="list-group-item">Marca: <b><?php echo $marca ?></b></li>
                    <li class="list-group-item">Modelo: <b><?php echo $modelo ?></b></li>
                    <li class="list-group-item">Fecha Colocación RFID: <b><?php echo $fecha_de_colocacion ?></b></li>
                    <li class="list-group-item"><a href="./add_desgastes_view.php">Registrar desgaste<i class="material-icons right waves-effect waves-light ">add_circle_outline</i></a></li>
                    <li class="list-group-item"><a href="./add_camion_view.php">Camiones<i class="material-icons right waves-effect waves-light ">add_circle_outline</i></a></li>
                    <li class="list-group-item"><a href="./add_llanta_view.php">LLantas <i class="material-icons right waves-effect waves-light ">add_circle_outline</i></a> </li>

                    <li class="list-group-item"><a href="./add_conductores_view.php">Conductores<i class="material-icons right waves-effect waves-light ">add_circle_outline</i></a></li>
                    <li class="list-group-item"><a href="../login.php" style="color: brown;">Cerrar Sesión<i class="material-icons right waves-effect waves-light">power_settings_new</i></a> </li>

                    <li style="margin-top: 10%; margin-left: 40%;"><a href="./add_camion_view.php" class="btn">
                            <i class="fa-solid fa-house"></i>
                        </a></li>
                </ul>

            </div>

            <!--           MAIN  -->
            <div id="main-content" class="col">
                <h1 style="color: #007cba; margin-left: 5%;">Estadísticas de la llanta</h1>
                <div class="container">
                    <div class="row">
                        <!--                         DESGASTE TOTAL
 -->
                        <div class="col-md-5 mainGraficasLLantas">
                            <H2 class="h3Title" style="margin-top: 3%;">DESGASTE TOTAL <button type="button" class="btn btn-sm rounded-circle" onclick="mostrarInformacion('El desgaste total es aquel que se da desde que se empezo a utilizar la llanta.')">
                                    <i class="fas fa-info-circle"></i>
                                </button></H2>
                            <div class="separador"></div>

                            <!-- GRAFICAS DESGASTE TOTAL INTERNO -->

                            <h4>-INTERNO</h4>

                            <div>
                                <canvas id="myChart"></canvas>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                            <?php
                            // Realizar la consulta y obtener los valores de desgaste
                            $SQL = "SELECT desgaste_total_interno FROM detalles_llanta WHERE id_llanta = $id_llanta";
                            $result = mysqli_query($conexion, $SQL);
                            $registros = array();
                            $suma = 0;

                            while ($row = mysqli_fetch_assoc($result)) {
                                $registros[] = $row['desgaste_total_interno'];
                                $suma += $row['desgaste_total_interno'];
                            }
                            ?>

                            <!-- Bloque de código JavaScript -->
                            <script>
                                const ctx = document.getElementById('myChart');
                                const registros = <?php echo json_encode($registros); ?>;
                                const labels = <?php echo json_encode(range(1, count($registros))); ?>;

                                new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: labels,
                                        datasets: [{
                                            label: ["DESGASTE TOTAL INTERNO: <?php echo $suma; ?>"],
                                            data: registros,
                                            borderWidth: 1,
                                            borderColor: 'blue',
                                            backgroundColor: 'rgba(0, 0, 255, 0.2)', // Opcional: ajusta el color de fondo
                                            pointBackgroundColor: 'blue', // Opcional: ajusta el color de los puntos
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: false
                                            }
                                        }
                                    }
                                });
                            </script>



                            <!-- GRAFICAS DESGASTE TOTAL INTERMEDIO -->
                            <h4>-MEDIO</h4>
                            <div>
                                <canvas id="myChart3"></canvas>
                            </div>

                            <?php
                            // Realizar la consulta y obtener los valores de desgaste
                            $SQL = "SELECT desgaste_total_medio FROM detalles_llanta WHERE id_llanta = $id_llanta";
                            $result = mysqli_query($conexion, $SQL);
                            $registros = array();
                            $suma = 0;

                            while ($row = mysqli_fetch_assoc($result)) {
                                $registros[] = $row['desgaste_total_medio'];
                                $suma += $row['desgaste_total_medio'];
                            }
                            ?>
                            <script>
                                const ctx3 = document.getElementById('myChart3');
                                const registros3 = <?php echo json_encode($registros); ?>;
                                const labels3 = <?php echo json_encode(range(1, count($registros))); ?>;

                                new Chart(ctx3, {
                                    type: 'line',
                                    data: {
                                        labels: labels3,
                                        datasets: [{
                                            label: ["DESGASTE TOTAL MEDIO: <?php echo $suma; ?>"], // Cambiar la etiqueta a "DESGASTE TOTAL MEDIO"
                                            data: registros3,
                                            borderWidth: 1,
                                            borderColor: 'blue',
                                            backgroundColor: 'rgba(0, 0, 255, 0.2)', // Opcional: ajusta el color de fondo
                                            pointBackgroundColor: 'blue', // Opcional: ajusta el color de los puntos
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: false
                                            }
                                        }
                                    }
                                });
                            </script>






                            <!-- GRAFICAS DESGASTE TOTAL EXTERNO -->
                            <h4>-EXTERNO</h4>
                            <div>
                                <canvas id="myChart4"></canvas>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


                            <?php
                            // Realizar la consulta y obtener los valores de desgaste
                            $SQL = "SELECT desgaste_total_externo FROM detalles_llanta WHERE id_llanta = $id_llanta";
                            $result = mysqli_query($conexion, $SQL);
                            $registros = array();
                            $suma = 0;

                            while ($row = mysqli_fetch_assoc($result)) {
                                $registros[] = $row['desgaste_total_externo'];
                                $suma += $row['desgaste_total_externo'];
                            }
                            ?>
                            <script>
                                const ctx4 = document.getElementById('myChart4');
                                const registros4 = <?php echo json_encode($registros); ?>;
                                const labels4 = <?php echo json_encode(range(1, count($registros))); ?>;

                                new Chart(ctx4, {
                                    type: 'line',
                                    data: {
                                        labels: labels4,
                                        datasets: [{
                                            label: ["DESGASTE TOTAL EXTERNO: <?php echo $suma; ?>"],
                                            data: registros4,
                                            borderWidth: 1,
                                            borderColor: 'blue',
                                            backgroundColor: 'rgba(0, 0, 255, 0.2)', // Opcional: ajusta el color de fondo
                                            pointBackgroundColor: 'blue', // Opcional: ajusta el color de los puntos
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: false
                                            }
                                        }
                                    }
                                });
                            </script>


                        </div>



                        <!-- DESGASTE ULTIMO VIAJE -->
                        <div class="col-md-5 mainGraficasLLantas">
                            <H2 style="color: cornflowerblue; margin-top: 3%;">DESGASTE ULTIMO VIAJE <button type="button" class="btn btn-sm rounded-circle" onclick="mostrarInformacion('El desgaste de ultimo viaje es aquel que se da entre viajes. Ej: Gto-Puebla')">
                                    <i class="fas fa-info-circle"></i>
                                </button></H2>

                            <div class="separador"></div>

                            <h4>-INTERNO</h4>


                            <div>
                                <canvas id="myChart2"></canvas>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                            <script>
                                const ctx2 = document.getElementById('myChart2');

                                new Chart(ctx2, {
                                    type: 'bar',
                                    data: {
                                        labels: [<?php

                                                    $SQL = "SELECT * FROM detalles_llanta WHERE id_llanta = $id_llanta";

                                                    $result = mysqli_query($conexion, $SQL);
                                                    while ($registros = mysqli_fetch_array($result)) {
                                                    ?>

                                                '<?php echo $registros["nombre_viaje"] ?>',

                                            <?php
                                                    }
                                            ?>
                                        ],
                                        datasets: [{
                                            label: 'Desgaste',
                                            data: [
                                                <?php

                                                $SQL = "SELECT * FROM detalles_llanta WHERE id_llanta = $id_llanta";

                                                $result = mysqli_query($conexion, $SQL);
                                                while ($registros = mysqli_fetch_array($result)) {
                                                ?> '<?php echo $registros["desgaste_parcial_interno"] ?>',
                                                <?php
                                                }
                                                ?>
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>

                            <!-- GRAFICAS DESGASTE TOTAL INTERMEDIO -->
                            <h4>-INTERMEDIO</h4>
                            <div>
                                <canvas id="myChart6"></canvas>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                            <script>
                                const ctx6 = document.getElementById('myChart6');

                                new Chart(ctx6, {
                                    type: 'bar',
                                    data: {
                                        labels: [<?php

                                                    $SQL = "SELECT * FROM detalles_llanta WHERE id_llanta = $id_llanta";

                                                    $result = mysqli_query($conexion, $SQL);
                                                    while ($registros = mysqli_fetch_array($result)) {
                                                    ?>

                                                '<?php echo $registros["nombre_viaje"] ?>',

                                            <?php
                                                    }
                                            ?>
                                        ],
                                        datasets: [{
                                            label: 'Desgaste',
                                            data: [
                                                <?php

                                                $SQL = "SELECT * FROM detalles_llanta WHERE id_llanta = $id_llanta";

                                                $result = mysqli_query($conexion, $SQL);
                                                while ($registros = mysqli_fetch_array($result)) {
                                                ?> '<?php echo $registros["desgaste_parcial_medio"] ?>',
                                                <?php
                                                }
                                                ?>
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>
                            <!-- GRAFICAS DESGASTE TOTAL EXTERNO -->
                            <h4>-EXTERNO</h4>
                            <div>
                                <canvas id="myChart7"></canvas>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <script>
                                const ctx7 = document.getElementById('myChart7');

                                new Chart(ctx7, {
                                    type: 'bar',
                                    data: {
                                        labels: [<?php

                                                    $SQL = "SELECT * FROM detalles_llanta WHERE id_llanta = $id_llanta";

                                                    $result = mysqli_query($conexion, $SQL);
                                                    while ($registros = mysqli_fetch_array($result)) {
                                                    ?>

                                                '<?php echo $registros["nombre_viaje"] ?>',

                                            <?php
                                                    }
                                            ?>
                                        ],
                                        datasets: [{
                                            label: 'Desgaste',
                                            data: [
                                                <?php

                                                $SQL = "SELECT * FROM detalles_llanta WHERE id_llanta = $id_llanta";

                                                $result = mysqli_query($conexion, $SQL);
                                                while ($registros = mysqli_fetch_array($result)) {
                                                ?> '<?php echo $registros["desgaste_parcial_externo"] ?>',
                                                <?php
                                                }
                                                ?>
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- ESTE SCRIPT ES PARA MOSTRAR ALGUNOS ALERTS QUE MUESTREN LA INFORMACION DE LO QUE SIGNIFICA CADA DESGASTE -->
    <script>
        function mostrarInformacion(informacion) {
            alert(informacion);
        }
    </script>
</body>


<?php include("../includes/footer.php") ?>













</body>