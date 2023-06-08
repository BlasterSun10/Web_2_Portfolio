<?php
require('pdf/fpdf.php');

$pdf=new FPDF('L','mm','A4');//HORIZONTAL
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,"VOTOS 2022",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,$pdf->Image("logoUSA.jpg", $pdf->GetX(), $pdf->GetY(),150,200));

$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->SetFont('Arial','I',10);



$conexion=mysqli_connect("localhost","root","","votos") or die ("Problemas en la coneccion");

$query="SELECT * FROM votos ORDER BY ".$_POST['orden'].";";
$registro=mysqli_query($conexion,$query) or die("Problema en el select: ".mysqli_error($conexion)); 


$pdf->Cell(40,10,"Nombre",1,0,'C',0);
$pdf->Cell(100,10,"Estado",1,0,'C',0);
$pdf->Cell(100,10,"Republicano",1,1,'C',0); 

while($row=$registro->fetch_assoc()){
    $pdf->Cell(40,10,$row['estado'],1,0,'C',0);
    $ancho=$row['democrata'];        
    $pdf->Cell(100,10,$pdf->Image("blue.jpg", $pdf->GetX(), $pdf->GetY(),$ancho,5),1,0,'L',0);
    $ancho=$row['republicano']; 
    $pdf->Cell(100,10,$pdf->Image("red.jpg", $pdf->GetX(), $pdf->GetY(),$ancho,5),1,1,'L',0);
}
$pdf->Cell(30,15,"Uriel Montejano Briano",0,1,'L',0);
$pdf->Cell(30,15,"Unviersidad Politenica San Luis Potosi",0,1,'L',0);
$pdf->Cell(30,15,"Programacion Web II",0,1,'L',0);
$pdf->Cell(30,15,"",0,1,'C',0);
$pdf->Output();

?>
  