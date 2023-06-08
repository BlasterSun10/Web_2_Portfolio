<?php 
require('pdf/fpdf.php');
$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(30,1,utf8_decode('Lista de Clientes'),0,1,'c',0);
$pdf->Cell(30,10,"",0,1,'c',0);
$pdf->Cell(30,10,"",0,1,'c',0);
$pdf->SetFont('Arial','I',10);
$cuenta=0;
$pdf->Cell(10,10,"Num",1,0,'L',0);
$pdf->Cell(50,10,"RFC",1,0,'L',0);
$pdf->Cell(50,10,"Nombre",1,0,'C',0);
$pdf->Cell(50,10,"E-mail",1,1,'L',0);


$conexion=mysqli_connect("localhost","u130633821_uriel","BlasterSun1010","u130633821_facturas") or die("Problemas en la conexion");
$registros=mysqli_query($conexion,"SELECT * FROM clientes ORDER BY RFC") or die("Problemas en el select:".mysqli_error($conexion));
        while($row=$registros->fetch_assoc()){
            $cuenta=$cuenta+1;
            $pdf->Cell(10,10,$cuenta,1,0,'L',0);
            $pdf->Cell(50,10,$row['RFC'],1,0,'C',0);
            $pdf->Cell(50,10,utf8_decode($row['Nombre']),1,0,'L',0);
            $pdf->Cell(50,10,$row['CorreoElectronico'],1,1,'L',0);
        }
$pdf->Cell(30,15,"",0,1,'C',0);
$pdf->Cell(30,15,"Total clientes ",$cuenta,0,1,'C',0);
$pdf->Output();
?>