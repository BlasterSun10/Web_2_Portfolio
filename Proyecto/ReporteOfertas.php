<?php
require('pdf/fpdf.php');
date_default_timezone_set(America/Monterrey);
$fecha=date('Y-m-d');
$pdf=new FPDF('L','mm','Legal');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('Lista de Ofertas'));

$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,$pdf->Image("UPSLP.jpg", $pdf->GetX(), $pdf->GetY(),40,40));
$pdf->Cell(40,10,$pdf->Image("images/logoOCCR.png", $pdf->GetX(), $pdf->GetY(),100,40));

$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);

$conexion=mysqli_connect("localhost","u130633821_urielproy","proyectoBSContra10","u130633821_proyecto") or die ("Problemas en la coneccion");
$registro=mysqli_query($conexion,"SELECT * FROM Ofertas;") or die("Problema en el select: ".mysqli_error($conexion)); 

    $pdf->SetFont('Arial','I',10);
    
    $pdf->Cell(40,10,"Fecha actual",1,1,'C',0);
    $pdf->Cell(40,10,"$fecha",1,1,'C',0);
    
    $pdf->Cell(40,10,"",0,1,'C',0);
    
    $pdf->Cell(10,10,"ID",1,0,'C',0);
    $pdf->Cell(40,10,"Nombre",1,0,'C',0);
    $pdf->Cell(30,10,"Puesto",1,0,'C',0);
    $pdf->Cell(40,10,"Puestos Disponibles",1,0,'C',0);
 //   $pdf->Cell(80,10,utf8_decode('Descripción'),1,0,'L',0);
    $pdf->Cell(30,10,"Fecha Inicio",1,0,'C',0);
    $pdf->Cell(40,10,"Fecha Disponibilidad",1,0,'C',0);
    $pdf->Cell(30,10,"Salario",1,0,'C',0);
    $pdf->Cell(35,10,utf8_decode('ID Área conocimiento'),1,1,'C',0);

    while($data=$row=$registro->fetch_assoc()){
        $pdf->Cell(10,10,$row['IDOfer'],1,0,'C',0);
        $pdf->Cell(40,10,utf8_decode($row['NombreOfer']),1,0,'C',0);
        $pdf->Cell(30,10,utf8_decode($row['PuestoOfer']),1,0,'C',0);
        $pdf->Cell(40,10,$row['PuestosDisOfer'],1,0,'C',0);
  //      $pdf->Cell(80,30,utf8_decode($row['DescOfer']),1,0,'L',0);
        $pdf->Cell(30,10,$row['fechainicio'],1,0,'C',0);
        $pdf->Cell(40,10,$row['fechafindisp'],1,0,'C',0);
        $pdf->Cell(30,10,$row['Salario'],1,0,'C',0);
        $pdf->Cell(35,10,$row['IDAreaCono'],1,1,'C',0);
    }
    $pdf->Cell(30,15,"",0,1,'C',0);

    $registro=mysqli_query($conexion,"SELECT * FROM AreasConocimiento;") or die("Problema en el select: ".mysqli_error($conexion)); 

    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,utf8_decode('Lista de Áreas de Conocimiento'));
    $pdf->SetFont('Arial','I',10);
    $pdf->Cell(40,10,"",0,1,'C',0);
    $pdf->Cell(10,10,"ID",1,0,'C',0);
    $pdf->Cell(50,10,utf8_decode('Área conocimiento'),1,1,'C',0);

    while($data=$row=$registro->fetch_assoc()){
        $pdf->Cell(10,10,$row['IDArea'],1,0,'C',0);
        $pdf->Cell(50,10,utf8_decode($row['NombreArea']),1,1,'L',0);
    }
    $pdf->Cell(30,15,"",0,1,'C',0);
    
    $pdf->Output();
    ob_end_flush();
    
?>