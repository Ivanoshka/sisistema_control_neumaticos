<!-- ESTA ES LA CONEXION A LA BASE DE DATOS
 -->
<?php

$server='localhost';
$user='root';
$pass='';
$bd='zoo';

$conexion=mysqli_connect($server,$user,$pass,$bd);

if($conexion){
    echo "Conexion Exitosa";
}




?>