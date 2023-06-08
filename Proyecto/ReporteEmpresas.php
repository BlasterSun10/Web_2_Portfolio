<?php
require('pdf/fpdf.php');
date_default_timezone_set(America/Monterrey);
$fecha=date('Y-m-d');
$pdf=new FPDF('L','mm','Legal');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('Lista de Empresas'));

$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,$pdf->Image("UPSLP.jpg", $pdf->GetX(), $pdf->GetY(),40,40));
$pdf->Cell(40,10,$pdf->Image("images/logoOCCR.png", $pdf->GetX(), $pdf->GetY(),100,40));

$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);

$conexion=mysqli_connect("localhost","u130633821_urielproy","proyectoBSContra10","u130633821_proyecto") or die ("Problemas en la coneccion");
$registro=mysqli_query($conexion,"SELECT * FROM Empresas;") or die("Problema en el select: ".mysqli_error($conexion)); 

    $pdf->Cell(40,10,"",0,1,'C',0);
    $pdf->Cell(40,10,"",0,1,'C',0);
    $pdf->SetFont('Arial','I',10);
    
    $pdf->Cell(40,10,"Fecha actual",1,1,'C',0);
    $pdf->Cell(40,10,"$fecha",1,1,'C',0);
    
    $pdf->Cell(40,10,"",0,1,'C',0);
    
    $pdf->Cell(20,10,"ID",1,0,'C',0);
    $pdf->Cell(30,10,"Nombre",1,0,'C',0);
    $pdf->Cell(30,10,"Correo",1,0,'C',0);
    $pdf->Cell(30,10,"Telefono",1,0,'C',0);
    $pdf->Cell(30,10,"País",1,0,'C',0);
    $pdf->Cell(30,10,"Direccion",1,1,'C',0);

    while($data=$row=$registro->fetch_assoc()){
        $pdf->Cell(20,10,$row['IDEmp'],1,0,'C',0);
        $pdf->Cell(30,10,$row['NombreEmp'],1,0,'C',0);
        $pdf->Cell(30,10,$row['CorreoEleEmp'],1,0,'C',0);
        $pdf->Cell(30,10,$row['TelefonoEmp'],1,0,'C',0);
        $pdf->Cell(30,10,$row['PaisEmp'],1,0,'C',0);
        $pdf->Cell(30,10,$row['DireccionEmp'],1,1,'C',0);
    }
    $pdf->Cell(30,15,"",0,1,'C',0);
    $pdf->Output();
    ob_end_flush();
    
?>