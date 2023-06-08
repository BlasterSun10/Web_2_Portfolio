<?php
require('pdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('Votos por estado'));

$conexion=mysqli_connect("localhost","root","","votos") or die ("Problemas en la coneccion");
$registro=mysqli_query($conexion,"SELECT * FROM votos;") or die("Problema en el select: ".mysqli_error($conexion)); 

    $pdf->Cell(40,10,"",0,1,'C',0);
    $pdf->Cell(40,10,"",0,1,'C',0);
    $pdf->SetFont('Arial','I',10);
    $pdf->Cell(40,10,"Estado",1,0,'L',0);
    $pdf->Cell(40,10,"Capital",1,0,'L',0);
    $pdf->Cell(40,10,"Abreviacion",1,0,'L',0);
    $pdf->Cell(30,10,"Democrata",1,0,'L',0);
    $pdf->Cell(30,10,"Republicano",1,1,'L',0);

       
    while($row=$registro->fetch_assoc()){
        $pdf->Cell(40,10,$row['estado'],1,0,'C',0);
        $pdf->Cell(40,10,$row['capital'],1,0,'C',0);
        $pdf->Cell(40,10,$row['abrev'],1,0,'C',0);
        $pdf->Cell(30,10,$row['democrata'],1,0,'C',0);
        $pdf->Cell(30,10,$row['republicano'],1,1,'C',0);
    }
    $pdf->Cell(30,15,"",0,1,'C',0);
    $pdf->Output();
    ob_end_flush();
    
?>

  