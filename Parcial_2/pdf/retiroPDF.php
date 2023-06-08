<?php
require('pdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('Reporte Cuentas'));

$conexion=mysqli_connect("localhost","root","","banco") or die ("Problemas en la coneccion");
$registro=mysqli_query($conexion,"SELECT * FROM cuentas;") or die("Problema en el select: ".mysqli_error($conexion)); 

    $pdf->Cell(40,10,"",0,1,'C',0);
    $pdf->Cell(40,10,"",0,1,'C',0);
    $pdf->SetFont('Arial','I',10);
    $pdf->Cell(90,10,"Nombre",1,0,'L',0);
    $pdf->Cell(90,10,"Cantidad",1,1,'L',0);

       
    while($row=$registro->fetch_assoc()){
        $pdf->Cell(90,10,$row['user'],1,0,'C',0);
        $pdf->Cell(90,10,$row['saldo'],1,1,'L',0);
    }
    $pdf->Cell(30,15,"",0,1,'C',0);
    $pdf->Output();
    ob_end_flush();
    
?>
?>
  