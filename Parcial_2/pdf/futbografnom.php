<?php
require('pdf/fpdf.php');

$pdf=new FPDF('L','mm','A4');//HORIZONTAL
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,"FUTBOL 2022",0,1,'C',0);


$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->SetFont('Arial','I',10);

$conexion=mysqli_connect("localhost","root","","futexentar") or die ("Problemas en la coneccion");

$query="SELECT idVisitante, idLocal, fecha FROM partido WHERE id=".$_POST['part'].";";
$registro=mysqli_query($conexion,$query) or die("Problema en el select: ".mysqli_error($conexion));

while($row=$registro->fetch_assoc()){
$pdf->Cell(40,10,"Partido No.".$_POST['part'],1,1,'C',0);
$pdf->Cell(40,10,"Equipo: ".$row['idVisitante']." - Equipo".$row['idLocal'],1,1,'C',0);
$pdf->Cell(40,10,"Fecha: ".$row['fecha'],1,1,'C',0); 
}


$pdf->Cell(40,10," ",0,1,'C',0);


$query="SELECT equipo.nombre FROM equipo INNER JOIN partido WHERE equipo.id=partido.idVisitante;";
$registro=mysqli_query($conexion,$query) or die("Problema en el select: ".mysqli_error($conexion));
$row=$registro->fetch_assoc();
$pdf->Cell(40,10,"Equipo: ".$row['nombre'],1,1,'C',0);


$query="SELECT equipo.nombre FROM equipo INNER JOIN partido WHERE equipo.id=partido.idLocal;";
$registro=mysqli_query($conexion,$query) or die("Problema en el select: ".mysqli_error($conexion));
$row=$registro->fetch_assoc();
$pdf->Cell(40,10,"Equipo: ".$row['nombre'],1,1,'C',0);

$pdf->Cell(40,10," ",0,1,'C',0);

$query="SELECT jugador.id, jugador.nombre, jugador.posicion, rel_p.nGoles, jugador.idE  FROM jugador INNER JOIN rel_p ON jugador.id=rel_p.idJ WHERE rel_p.idP=".$_POST['part'].";";
$registro=mysqli_query($conexion,$query) or die("Problema en el select: ".mysqli_error($conexion)); 


$pdf->Cell(40,10," ",0,1,'C',0);


$pdf->Cell(40,10,"ID",1,0,'C',0);
$pdf->Cell(40,10,"Nombre",1,0,'C',0);
$pdf->Cell(40,10,"Posicion",1,0,'C',0);
$pdf->Cell(40,10,"Goles",1,0,'C',0);
$pdf->Cell(40,10,"ID Equipo",1,1,'C',0); 

while($row=$registro->fetch_assoc()){
    $pdf->Cell(40,10,$row['id'],1,0,'C',0);
    $pdf->Cell(40,10,$row['nombre'],1,0,'C',0);
    $pdf->Cell(40,10,$row['posicion'],1,0,'C',0);
    $pdf->Cell(40,10,$row['nGoles'],1,0,'C',0);
    $pdf->Cell(40,10,$row['idE'],1,1,'C',0);
}
$pdf->Cell(30,15,"Uriel Montejano Briano",0,1,'L',0);
$pdf->Cell(30,15,"Unviersidad Politenica San Luis Potosi",0,1,'L',0);
$pdf->Cell(30,15,"Programacion Web II",0,1,'L',0);
$pdf->Cell(30,15,"",0,1,'C',0);
$pdf->Output();

?>
  