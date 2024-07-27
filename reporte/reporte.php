<?php
require('fpdf.php');
// fecha y hora de Ciudad de mexico
date_default_timezone_set('America/Mexico_City');

// mandar llamar los datos de la base de datos
require '../conexionBD.php';
if (isset($_GET['id_reporte'])) {
/*     datos sensados
 */    $id_reporte = $_GET['id_reporte'];
    $query = "SELECT * FROM reporte WHERE id_reporte = $id_reporte ";
    $result = mysqli_query($conexion,$query);


}

    

class PDF extends FPDF
{
    
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',25);
    //color de titulo
    $this->SetTextColor(179, 182, 183);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'FERRADA - AXPEKT',0,0,'C');

    // Salto de línea
    $this->Ln(8);
    // Movernos a la derecha
    $this->Cell(80);
     // Arial bold 25
     $this->SetFont('Arial','B',15);
    //segundo Título
    $this->Cell(30,10,'SOLUTIONS',0,0,'C');

    // Salto de línea
    $this->Ln(4);
    // Movernos a la derecha
    $this->Cell(80);
     // Arial bold 25
     $this->SetFont('Arial','B',15);
    //barra
    $this->Cell(30,10,'________________________________________________________________',0,0,'C');

    // Salto de línea
    $this->Ln(8);
    // Movernos a la derecha
    $this->Cell(80);
     // Arial bold 20
     $this->SetFont('Arial','B',17);
     //color de titulo
    $this->SetTextColor(0,0,0);
    //tercer Título
    $this->Cell(30,10,'REPORTE DE VIAJE',0,0,'C');
    // Salto de línea
    $this->Ln(7);

    $this->SetFont('Arial','B',11);
    //color de titulo
    $this->SetTextColor(57, 57, 57);
    $this->Cell(125);
    $this->Cell(30,10,date('d/m/Y'),0,0,'C');
    $this->Cell(-1);
    $this->Cell(30,10,',Celaya Guanajuato',0,0,'C');
    $this->Ln(5);
    $this->Cell(164);
    $this->Cell(30,10,date("h:i:s"),0,0,'C');
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}



$pdf = new PDF();
$pdf ->AliasNbPages();
$pdf->AddPage();

// mostrar las llantas en el pdf
while($row = $result->fetch_assoc()){

    
     // Consultar información de la tabla "llanta"
     $query_llanta = "SELECT * FROM llanta WHERE id_camion = " . $row['id_camion'];
     $result_llanta = mysqli_query($conexion, $query_llanta);
 
     $llantas_registradas = "";
     while ($row_llanta = $result_llanta->fetch_assoc()) {
         $llantas_registradas .= $row_llanta['id_llanta'] . "\n";
     }

     $llantas_registradas = rtrim($llantas_registradas); // Eliminar la última coma


    // mostrar primeros datos del pdf
    //aqui codigo para la fecha
    // Arial bold 20
    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',11);
    //color de titulo
   $pdf->SetTextColor(57, 57, 57);
   //traer la ruta de a base de datos
   $pdf->Cell(-8);
   $pdf->Cell(30,10,'RUTA: ',0,0,'C');
   $pdf->Cell(-40);
   $pdf->SetTextColor(0,0,0);
   $pdf->Cell(90,10, $row['ruta'],0,1,'C',0);
   //traer el id del repoprte de la base de datos
   $pdf->Cell(10);
   $pdf->Ln(-5);
   $pdf->SetTextColor(57, 57, 57);
   $pdf->Cell(30,10,'ID Del de Viaje: ',0,0,'C');
   $pdf->Cell(-40);
   $pdf->SetTextColor(0,0,0);
   $pdf->Cell(90,10, $row['id_reporte'],0,1,'C',0);
   //traer el id del repoprte de la base de datos
   $pdf->Cell(10);
   $pdf->Ln(-5);
   $pdf->SetTextColor(57, 57, 57);
   $pdf->Cell(30,10,'ID Del Camion: ',0,0,'C');
   $pdf->Cell(-40);
   $pdf->SetTextColor(0,0,0);
   $pdf->Cell(90,10, $row['id_camion'],0,1,'C',0);
   //traer el condcutor de la base de datos
   $pdf->Cell(-5);
   $pdf->Ln(-5);
   $pdf->SetTextColor(57, 57, 57);
   $pdf->Cell(30,10,'Chofer: ',0,0,'C');
   $pdf->Cell(-35);
   $pdf->SetTextColor(0,0,0);
   $pdf->Cell(90,10, $row['nombre_conductor'],0,1,'C',0);
   $pdf->Cell(-72);
   //traer la fecha de salida de la base de datos
   $pdf->Cell(25);
   $pdf->Ln(-5);
   $pdf->SetTextColor(57, 57, 57);
   $pdf->Cell(30,10,'Fecha de Salida/Hora: ',0,0,'C');
   $pdf->Cell(-22);
   $pdf->SetTextColor(0,0,0);
   $pdf->Cell(90,10, $row['fecha_salida'],0,1,'C',0);
   //traer la fecha de llegada de la base de datos
   $pdf->Cell(25);
   $pdf->Ln(-5);
   $pdf->SetTextColor(57, 57, 57);
   $pdf->Cell(30,10,'Fecha de Llegada/Hora: ',0,0,'C');
   $pdf->Cell(-21);
   $pdf->SetTextColor(0,0,0);
   $pdf->Cell(90,10, $row['fecha_llegada'],0,1,'C',0);
   
   // Salto de línea
   $pdf->Ln(5);

   $pdf->SetFont('Arial','B',10);
   $pdf->Cell(90,8, 'ID DE LLANTAS SENSADOS',1,0,'C',0);
   $pdf->Cell(90,8, 'ID DE LLANTAS REGISTRADAS',1,1,'C',0);
   $pdf->SetFont('Arial','B',10);
   
   // Obtener todas las llantas sensadas en un array
   $llantas_sensadas = array(
       $row['llanta_1'],
       $row['llanta_2'],
       $row['llanta_3'],
       $row['llanta_4'],
       $row['llanta_5'],
       $row['llanta_6'],
       $row['llanta_7'],
       $row['llanta_8'],
       $row['llanta_9'],
       $row['llanta_10'],
       $row['llanta_11'],
       $row['llanta_12'],
       $row['llanta_13'],
       $row['llanta_14'],
       $row['llanta_15'],
       $row['llanta_16'],
       $row['llanta_17'],
       $row['llanta_18']
   );
   
   // Obtener todas las llantas registradas en un array
   $llantas_registradas_array = explode("\n", $llantas_registradas);
   
   // Verificar cuál array tiene más elementos para establecer el total de filas
   $total_filas = max(count($llantas_sensadas), count($llantas_registradas_array));
   
   // Recorrer filas
   for ($i = 0; $i < $total_filas; $i++) {
       $pdf->Cell(90,8, isset($llantas_sensadas[$i]) ? $llantas_sensadas[$i] : '', 1, 0, 'C', 0);
       $pdf->Cell(90,8, isset($llantas_registradas_array[$i]) ? $llantas_registradas_array[$i] : '', 1, 1, 'C', 0);
   }
   
   // Resto del código...
   
 

    
    $pdf->Ln(3);
    $pdf->Cell(-30);
    $pdf->SetTextColor(57, 57, 57);
    $pdf->Cell(90,8, 'OBSERVACIONES: ',0,0,'C',0);
    $pdf->Ln(4);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(-30);
    $pdf->Cell(90,10, $row['observaciones'],0,1,'C',0);
}




$pdf->Output();
